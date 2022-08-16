<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function landing(Post $post, Request $request)
    {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
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
                'delete'        =>  false,
                'status'        =>  $post->status,
                'likes'         =>  $post->likers()->count(),
                'replycount'    =>  $post->replies->count(),
                'downloadready' =>  $post->converted_for_downloading_at,
                'hlsready'      =>  $post->converted_for_streaming_at,
                'video'         =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.mp4'),
                'hls'           =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.m3u8')
            ]),
            'filters' => $request->only(['search'])
        ]);
    }

    public function index(Post $post)
    {
        return Inertia::render('Home', [
            'posts' => Post::query()       
            ->latest()
            ->paginate(20)
            ->withQueryString()
            ->through(fn($post) => [
                'name'          =>  $post->user->name,
                'username'      =>  $post->user->username,
                'title'         =>  $post->title,
                'description'   =>  $post->description,
                'time'          =>  $post->created_at->diffForHumans(),
                'avatar'        =>  $post->user->getProfilePhotoUrlAttribute(),
                'userlink'      =>  '@' . $post->user->username,
                'media'         =>  'storage/' . $post->files,
            ])
        ]);
    }
}
