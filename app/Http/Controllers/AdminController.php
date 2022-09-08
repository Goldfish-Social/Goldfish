<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use App\Models\Reply;
use App\Models\User;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function users()
    {
        return Inertia::render('Admin/Users', [
            'users'     =>  User::all()
        ]);
    }

    public function deleteUser(User $user)
    {
        $user->delete();

        return back();
    }

    public function posts()
    {
        return Inertia::render('Admin/Posts', [
            'posts'     =>  PostResource::collection(
                Post::query()
                    ->with('user')
                    ->latest()
                    ->paginate()
            )
        ]);
    }

    public function deletePost(Post $post)
    {
        $post->delete();

        return back();
    }
}
