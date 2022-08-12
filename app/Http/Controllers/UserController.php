<?php

namespace App\Http\Controllers;

use IntlChar;
use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Overtrue\LaravelFollow\Followable;

class UserController extends Controller
{
    // Community / user overview page
    public function index(Request $request)
    {
        return Inertia::render('Users/Community', [
            'users' => User::query()
            ->with('followings')
            ->when($request->input('search'), function ($query, $search) {
                $query->where('username', 'like', "%{$search}%");
            })
            
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id'            =>  $user->id,
                'name'          =>  $user->name,
                'username'      =>  $user->username,
                'avatar'        =>  $user->getProfilePhotoUrlAttribute(),
                'about'         =>  Str::limit($user->about, 200),
                'isFollowing'    => Auth::user()->isFollowing($user),
                'isFollowedBy'   => Auth::user()->isFollowedBy($user),
                'followbutton'   => Auth::user()->id === $user->id,
            ]),
            'filters'           =>  $request->only(['search']),
            'usercount'         =>  User::latest()->count()
        ]);
    }
    // Show user profile with posts
    public function show(User $user, Post $post)
    {
        return Inertia::render('Users/Show', [
            'profile' => [
                'id'             =>  $user->id,
                'name'           =>  $user->name,
                'about'          =>  $user->about,
                'pic'            =>  $user->getProfilePhotoUrlAttribute(),
                'time'           =>  $user->created_at->diffForHumans(),
                'username'       =>  $user->username,
                'website'        =>  $user->website,
                'postamount'     =>  $user->posts->count(),
                'followerscount' =>  $user->followers()->count(),
                'followcount'    =>  $user->followings()->count(),
                'isFollowing'    =>  Auth::user()->isFollowing($user),
                'isFollowedBy'   =>  Auth::user()->isFollowedBy($user),
                'followbutton'   =>  Auth::user()->id === $user->id,
                'posts' => Post::query()
                ->where('user_id', $user->id)
                ->latest()
                ->paginate(10)
                ->through(fn($post) => [
                    'id'                =>  $post->id,
                    'description'       =>  $post->description,
                    'avatar'            =>  $post->user->getProfilePhotoUrlAttribute(),
                    'time'              =>  $post->created_at->diffForHumans(),
                    'username'          =>  $post->user->username,
                    'video'             =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.mp4'),
                    'status'            =>  $post->status,
                    'isliked'           =>  $post->isLikedBy(auth()->user()),
                    'likes'             =>  $post->likers()->count(),
                    'delete'            =>  Auth::user()->id === $post->user_id,
                    'replycount'        =>  $post->replies->count(),
                    
                ]),

            ],
        ]);

    }
    // Show user profile with followers
    public function followers(User $user, Post $post)
    {
        return Inertia::render('Users/Followers', [
            'profile' => [
                'id'             =>  $user->id,
                'name'           =>  $user->name,
                'about'          =>  $user->about,
                'pic'            =>  $user->getProfilePhotoUrlAttribute(),
                'time'           =>  $user->created_at->diffForHumans(),
                'username'       =>  $user->username,
                'website'        =>  $user->website,
                'postamount'     =>  $user->posts->count(),
                'followerscount' =>  $user->followers()->count(),
                'followcount'    =>  $user->followings()->count(),
                'isFollowing'    =>  Auth::user()->isFollowing($user),
                'isFollowedBy'   =>  Auth::user()->isFollowedBy($user),
                'followbutton'   =>  Auth::user()->id === $user->id,
                'followers'      =>  $user->followers
                ->map(fn($followers) => [
                    'id'             =>  $followers->id,
                    'name'           =>  $followers->name,
                    'username'       =>  $followers->username,
                    'avatar'         =>  $followers->getProfilePhotoUrlAttribute(),
                    'userlink'       =>  '/@' . $followers->username,
                    'isFollowing'    =>  Auth::user()->isFollowing($followers),
                    'isFollowedBy'   =>  Auth::user()->isFollowedBy($followers),
                    'followbutton'   =>  Auth::user()->id === $followers->id,
                ]),
            ],
        ]);
    }
    // Show user profile with followers
    public function follows(User $user, Post $post)
    {
        return Inertia::render('Users/Followers', [
            'profile' => [
                'id'             =>  $user->id,
                'name'           =>  $user->name,
                'about'          =>  $user->about,
                'pic'            =>  $user->getProfilePhotoUrlAttribute(),
                'time'           =>  $user->created_at->diffForHumans(),
                'username'       =>  $user->username,
                'website'        =>  $user->website,
                'postamount'     =>  $user->posts->count(),
                'followerscount' =>  $user->followers()->count(),
                'followcount'    =>  $user->followings()->count(),
                'isFollowing'    =>  Auth::user()->isFollowing($user),
                'isFollowedBy'   =>  Auth::user()->isFollowedBy($user),
                'followbutton'   =>  Auth::user()->id === $user->id,
                'followers'      =>  User::where('id', $user->followables->pluck('user_id'))->latest()
                ->paginate()
                ->map(fn($follows) => [
                    'id'        =>  $follows->id,
                    'name'      =>  $follows->name,
                    'username'  =>  $follows->username,
                    'userlink'  =>  '/@' . $follows->username,
                    'avatar'    =>  $follows->getProfilePhotoUrlAttribute(),
                    'isFollowing'    =>  Auth::user()->isFollowing($follows),
                    'isFollowedBy'   =>  Auth::user()->isFollowedBy($follows),
                    'followbutton'   =>  Auth::user()->id === $follows->id,
                ])
            ],
        ]);
    }

    public function follow(User $user) 
    {
        if(auth()->user()->isFollowing($user) ) {
            auth()->user()->unfollow($user);
        } else {
        auth()->user()->toggleFollow($user);
        }

        return back();
    }

}
