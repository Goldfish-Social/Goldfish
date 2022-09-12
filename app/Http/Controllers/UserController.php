<?php

namespace App\Http\Controllers;

use App\Http\Resources\FollowerResource;
use App\Http\Resources\FollowResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
use App\Notifications\FollowNotifications;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Users/Community', [
            'users' => UserResource::collection(
                User::query()
                    ->select('id', 'name', 'username', 'about', 'created_at')
                    ->when($request->input('search'), function ($query, $search) {
                        $query->where('username', 'like', "%{$search}%");
                    })
                    ->withCount(['followings', 'followables', 'posts'])
                    ->with('followings', 'followables', 'posts')
                    ->orderBy('created_at', 'DESC')
                    ->paginate(10)
                    ->withQueryString()
            ),
            'filters'                =>  $request->only(['search'])
        ]);
    }

    public function show(User $user, Request $request)
    {
        return Inertia::render('Users/Show', [
            'profile'       =>  UserResource::make($user),
            'posts'         => PostResource::collection(
                $user->posts()
                ->withCount('replies')
                ->latest()
                ->paginate()
            ),
            'filters'       =>  $request->only(['search']),
        ]);
    }

    public function followers(User $user)
    {
        return Inertia::render('Users/Followers', [
            'profile'       =>  UserResource::make($user),
            'followers'     =>  FollowerResource::collection(
                $user->followers()
                     ->latest()
                     ->paginate()
            )
        ]);
    }

    public function follows(User $user)
    {
        return Inertia::render('Users/Follows', [
            'profile'       =>  UserResource::make($user),
            'follows'       =>  FollowResource::collection(
                $user->followings()
                     ->latest()
                     ->paginate()
            )
        ]);
    }

    public function follow(User $user)
    {
        if (auth()->user()->isFollowing($user)) {
            auth()->user()->unfollow($user);
        } else {
            auth()->user()->toggleFollow($user);
            $user->notify(new FollowNotifications($user, auth()->user()));
        }

        return back();
    }
}
