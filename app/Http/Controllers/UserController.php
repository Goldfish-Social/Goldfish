<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class UserController extends Controller
{
    // Community / user overview page
    public function index(Request $request, User $user)
    {
        if (Auth::user()) {
            $isFollowing = Auth::user()->isFollowing($user);
            $followedBy = Auth::user()->isFollowedBy($user);
            $followButton = Auth::user()->id === $user->id;
        } else {
            $isFollowing = null;
            $followedBy = null;
            $followButton = null;
        }

        return Inertia::render('Users/Community', [
            'users' => User::query()
                ->with('followings')
                ->when($request->input('search'), function ($query, $search) {
                    $query->where('username', 'like', "%{$search}%");
                })
                ->paginate(10)
                ->withQueryString()
                ->through(fn ($user) => [
                    'id'             =>  $user->id,
                    'name'           =>  $user->name,
                    'username'       =>  $user->username,
                    'pic'            =>  $user->getProfilePhotoUrlAttribute(),
                    'about'          =>  Str::limit($user->about, 200),
                    'postamount'     =>  $user->posts->count(),
                    'followerscount' =>  $user->followers()->count(),
                    'followcount'    =>  $user->followings()->count(),
                    'isFollowing'    =>  Auth::user()->isFollowing($user),
                    'isFollowedBy'   =>  Auth::user()->isFollowedBy($user),
                    'followbutton'   =>  Auth::user()->id === $user->id,
                ]),
            'filters'                =>  $request->only(['search']),
            'usercount'              =>  User::latest()->count()
        ]);
    }
    // Show user profile with posts
    public function show(User $user, Post $post)
    {
        if (Auth::user()) {
            $isFollowing = Auth::user()->isFollowing($user);
            $followedBy = Auth::user()->isFollowedBy($user);
            $followButton = Auth::user()->id === $user->id;
            $liked = $post->isLikedBy(auth()->user());
        } else {
            $isFollowing = null;
            $followedBy = null;
            $followButton = null;
            $liked = null;
        }

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
                'isFollowing'    =>  $isFollowing,
                'isFollowedBy'   =>  $followedBy,
                'followbutton'   =>  $followButton,
                'posts' => Post::query()
                    ->where('user_id', $user->id)
                    ->latest()
                    ->paginate(10)
                    ->through(fn ($post) => [
                        'id'                =>  $post->id,
                        'description'       =>  $post->description,
                        'avatar'            =>  $post->user->getProfilePhotoUrlAttribute(),
                        'time'              =>  $post->created_at->diffForHumans(),
                        'username'          =>  $post->user->username,
                        'downloadready'     =>  $post->converted_for_downloading_at,
                        'hlsready'          =>  $post->converted_for_streaming_at,
                        'video'             =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.mp4'),
                        'hls'               =>  Storage::disk('public')->url('uploads/' . $post->user->id . '/' . 'videos/' . $post->id . '.m3u8'),
                        'status'            =>  $post->status,
                        'isliked'           =>  $liked,
                        'likes'             =>  $post->likers()->count(),
                        'replycount'        =>  $post->replies->count()
                    ])
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
                    // NEED: pagination
                    ->map(fn ($followers) => [
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
    public function follows(User $user)
    {
        return Inertia::render('Users/Follows', [
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
                'followers'      =>  $user->followings
                    // NEED: pagination
                    ->map(fn ($follows) => [
                        'name'          =>  $follows->followable->name,
                        'id'            =>  $follows->followable->user_id,
                        'username'      =>  $follows->followable->username,
                        'avatar'        =>  $follows->followable->getProfilePhotoUrlAttribute(),
                        'userlink'       =>  '/@' . $follows->followable->username,
                        'isFollowing'    =>  Auth::user()->isFollowing($follows->followable),
                        'isFollowedBy'   =>  Auth::user()->isFollowedBy($follows->followable),
                        'followbutton'   =>  Auth::user()->id === $follows->followable->id,
                    ]),
            ],
        ]);
    }
    // Simnple fun stuff! Follow / unfollow.
    public function follow(User $user)
    {
        if (auth()->user()->isFollowing($user)) {
            auth()->user()->unfollow($user);
        } else {
            auth()->user()->toggleFollow($user);
        }

        return back();
    }
}
