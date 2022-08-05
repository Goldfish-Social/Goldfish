<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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
