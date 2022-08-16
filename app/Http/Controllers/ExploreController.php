<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ExploreController extends Controller
{
    public function index()
    {
        return Inertia::render('Explore/Index', [
            'posts' => Post::query()
                ->latest()
                ->where('status', 'Public')
                ->where('is_nsfw', null)
                ->paginate(20)
                ->withQueryString()
                ->through(fn ($post) => [
                    'id'            =>  $post->id,
                    'name'          =>  $post->user->name,
                    'username'      =>  $post->user->username,
                    'title'         =>  $post->title,
                    'description'   =>  $post->description,
                    'time'          =>  $post->created_at->diffForHumans(),
                    'avatar'        =>  $post->user->getProfilePhotoUrlAttribute(),
                    'userlink'      =>  '@' . $post->user->username,
                    'media'         =>  'storage/' . $post->files,
                    'delete'        =>  Auth::user()->id === $post->user_id,
                    'status'        =>  $post->status,
                    'isliked'       =>  $post->isLikedBy(auth()->user()),
                    'likes'         =>  $post->likers()->count(),
                    'replycount'    =>  $post->replies->count(),
                    'downloadready' =>  $post->converted_for_downloading_at,
                    'hlsready'      =>  $post->converted_for_streaming_at,
                    'video'         =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.mp4'),
                    'hls'           =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.m3u8'),
                ]),
            'postcount'         =>  Post::latest()->count(),
        ]);
    }
}
