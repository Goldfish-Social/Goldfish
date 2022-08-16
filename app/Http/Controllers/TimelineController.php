<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TimelineController extends Controller
{
    public function public(Post $post, Request $request, User $user)
    {
        return Inertia::render('Timeline/Public', [
            'posts' => Post::query()
            ->latest()
            ->where('status', 'Public')
            ->where('is_nsfw', null)
            ->when($request->input('search'), function ($query, $search) {
                $query->where('description', 'like', "%{$search}%");
            })
            ->paginate(20)
            ->withQueryString()
            ->through(fn($post) => [
                'id'            =>  $post->id,
                'name'          =>  $post->user->name,
                'username'      =>  $post->user->username,
                'title'         =>  $post->title,
                'description'   =>  $post->description,
                'time'          =>  $post->created_at->diffForHumans(),
                'avatar'        =>  $post->user->getProfilePhotoUrlAttribute(),
                'userlink'      =>  '@' . $post->user->username,
                'media'         =>  'storage/' . $post->files,
                'downloadready' =>  $post->converted_for_downloading_at,
                'hlsready'      =>  $post->converted_for_streaming_at,
                'video'         =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.mp4'),
                'hls'           =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.m3u8'),
                'delete'        =>  Auth::user()->id === $post->user_id,
                'status'        =>  $post->status,
                'isliked'       =>  $post->isLikedBy(auth()->user()),
                'likes'         =>  $post->likers()->count(),
                'replycount'    => $post->replies->count()
            ]),
            'filters'           =>  $request->only(['search']),
            'postcount'         =>  Post::latest()->count(),
        ]);
    }

    public function home(Post $post, Request $request, User $user)
    {
        return Inertia::render('Timeline/Home', [
            'posts' => Post::where(function ($query)
            {
                $query->where('user_id', auth()->id())
                ->orWhereIn('user_id', auth()->user()->followings->pluck('followable_id'));
            })
            ->latest()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('description', 'like', "%{$search}%");
            })
            ->paginate(20)
            ->withQueryString()
            ->through(fn($post) => [
                'id'            =>  $post->id,
                'name'          =>  $post->user->name,
                'username'      =>  $post->user->username,
                'title'         =>  $post->title,
                'description'   =>  $post->description,
                'time'          =>  $post->created_at->diffForHumans(),
                'avatar'        =>  $post->user->getProfilePhotoUrlAttribute(),
                'userlink'      =>  '@' . $post->user->username,
                'media'         =>  'storage/' . $post->files,
                'downloadready' =>  $post->converted_for_downloading_at,
                'hlsready'      =>  $post->converted_for_streaming_at,
                'video'         =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.mp4'),
                'hls'           =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.m3u8'),
                'delete'        =>  Auth::user()->id === $post->user_id,
                'status'        =>  $post->status,
                'isliked'       =>  $post->isLikedBy(auth()->user()),
                'likes'         =>  $post->likers()->count(),
                'replycount'    =>  $post->replies->count()
            ]),
            'filters'           =>  $request->only(['search']),
            'postcount'         =>  Post::latest()->count(),
            
        ]);
    }
}
