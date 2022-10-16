<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use App\Jobs\ConvertVideoForDownloading;
use App\Notifications\LikedPostNotification;

class PostController extends Controller
{
    public function show(Post $post, Request $request)
    {
        return Inertia::render('Posts/Show', [
            'post'  =>  PostResource::make(
                $post
            ),
            'filters' => $request->only(['search'])
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'description'   =>  'required|min:1|max:500',
            'status'        =>  'required',
            'nsfw'          =>  'nullable|boolean',
            'video'         =>  'required|file|mimetypes:video/x-ms-asf,video/x-flv,video/mp4,video/mpeg,application/x-mpegURL,video/MP2T,video/3gpp,video/quicktime,video/x-msvideo,video/x-ms-wmv,video/avi|max:10240',
        ]);

        // if($request->hasFile('files')) 
        // {
        //    $attributes['files'] = $request->file('files')->store('uploads/images/', 'public');
        // }

        $attributes['user_id'] = auth()->user()->id;

        $attributes = Post::create([
            'user_id'       =>  auth()->user()->id,
            'status'        =>  $request->status,
            'is_nsfw'       =>  $request->nsfw,
            'disk'          =>  'public',
            'original_name' =>  $request->file('video')->getClientOriginalName(),
            'path'          =>  $request->file('video')->store('uploads' . $request['user_id'] . '/' . 'videos/', 'public'),
            'description'   =>  $request->description
        ]);

        //$this->dispatch(new ConvertVideoForStreaming($attributes));
        $this->dispatch(new ConvertVideoForDownloading($attributes));

        return back();
    }

    public function destroy(Post $post)
    {
        if (!Gate::allows('delete-post', $post)) {
            abort(403);
        }

        File::delete($post->path);
        File::delete('/uploads' . $post->user->id . '/videos/' . $post->id);

        /* $firstPath = $post->path;
        if(File::exists($firstPath)) {
            File::delete($firstPath);
        } */
        $secondPath = public_path('../storage/uploads' . $post->user->id . '/videos/' . $post->id);
        if(File::exists($secondPath)) {
            File::delete($secondPath);
        }
        // Storage::disk('public')->delete($path);
        // Storage::disk('public')->delete('/uploads' . $post->user->id . '/videos/' . $post->id);

        $post->delete();
        return redirect('/home')->with('message', 'Post deleted successfully.');
    }

    public function like(Post $post)
    {
        if (auth()->user()->hasLiked($post)) {
            auth()->user()->unlike($post);
        } else {
            auth()->user()->toggleLike($post);
            $post->user->notify(new LikedPostNotification($post, auth()->user()));
        }
        return back();
    }

    public function toggleLike(Post $post)
    {
        auth()->user()->toggleLike($post);

        if (auth()->user()->hasLiked($post)) {
            $post->user->notify(new LikedPostNotification($post, auth()->user()));
        }

        return redirect()->back();
    }
}
