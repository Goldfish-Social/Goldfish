<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return Inertia::render('Posts/Index', [
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

    public function show(Post $post)
    {
        return Inertia::render('Posts/Show', [
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

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title'  => 'required|min:1',
            'description'  => 'required|min:1',
            'files'    => ['nullable','mimes:jpg,jpeg,png,gif','max:500048'],
        ]);

        if($request->hasFile('files')) 
        {
            $attributes['files'] = $request->file('files')->store('uploads/images/', 'public');
        }

        $attributes['user_id'] = auth()->user()->id;

        Post::create($attributes);

        return redirect(('/home'));
    }
}
