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
    public function landing(Post $post)
    {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'posts' => Post::query()       
            ->latest()
            ->paginate(50)
            ->withQueryString()
            ->through(fn($post) => [
                'id'        => $post->id,
                'name'    =>  $post->user->name,
                'username'    =>  $post->user->username,
                'title'        => $post->title,
                'description'  =>  $post->description,
                'time'      =>  $post->created_at->diffForHumans(),
                'avatar'    =>  $post->user->getProfilePhotoUrlAttribute(),
                'userlink'  =>  '@' . $post->user->username,
                'media'     =>  'storage/' . $post->files,
                'video'     =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.mp4'),
                'delete'    =>  false
            ])
        ]);
    }

    public function index(Post $post)
    {
        return Inertia::render('Home', [
            'posts' => Post::query()       
            ->latest()
            ->paginate(50)
            ->withQueryString()
            ->through(fn($post) => [
                'name'    =>  $post->user->name,
                'username'    =>  $post->user->username,
                'title'        => $post->title,
                'description'  =>  $post->description,
                'time'      =>  $post->created_at->diffForHumans(),
                'avatar'    =>  $post->user->getProfilePhotoUrlAttribute(),
                'userlink'  =>  '@' . $post->user->username,
                'media'     =>  'storage/' . $post->files,
            ])
        ]);
    }
}
