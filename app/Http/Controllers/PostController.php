<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class PostController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('posts.index', [
            'posts' => Post::latest()->with(['likes', 'user'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('posts.form');
    }

    public function store(Request $request) {
        // Validate form fields
        $formFields = $request->validate([
            'caption' => 'required',
            'visibility' => 'required',
            'nsfw' => 'nullable|boolean',
            'media' => ['required','mimes:mp4,mov','max:500048'],
        ]);

        if($request->hasFile('media')) {
            $formFields['media'] = $request->file('media')->store('media', 'public');
        }

        // Get user_id from auth
        $formFields['user_id'] = auth()->id();

        // Submit data
        Post::create($formFields);

        // Return after success
        return redirect('/i/home')->with('message', 'Post published!');
    }

    public function postLikePost(Request $request) {
        $post_id = $request['postId'];
        $is_like = $request['isLike'] === 'true';
        $update = false;
        $post = Post::find($post_id);
        if (!$post) {
            return null;
        }
        $user = Auth::user();
        $like = $user->likes->where('post_id', $post_id)->first();
        if ($like) {
            $already_like = $like->like;
            $update = true;
            if ($already_like == $is_like) {
                $like->delete();
                return null;    
            }
        } else {
            $like = new Like();
            // $like->create($like);
        }
        $like->like = $is_like;
        $like->user_id = $user->id;
        $like->post_id = $post->id;
        if ($update) {
            $like->update();
        } else {
            $like->save();
        }
        return null;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostRequest  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post) {
        if (! Gate::allows('delete-post', $post)) {
            abort(403);
        }
 
        $post->delete();
        return redirect('/i/home')->with('message', 'Post deleted successfully');
    }
}
