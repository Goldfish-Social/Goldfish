<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Inertia\Inertia;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function landing(Request $request)
    {
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'posts' => PostResource::collection(
                Post::query()
                    ->with('replies', 'user')
                    ->latest()
                    ->where('status', 'Public')
                    ->where('is_nsfw', null)
                    ->when($request->input('search'), function ($query, $search) {
                        $query->where('description', 'like', "%{$search}%");
                    })
                    ->paginate(20)
                    ->withQueryString()
            ),
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
                ->through(fn ($post) => [
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
