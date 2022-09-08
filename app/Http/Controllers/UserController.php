<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Post;
use App\Models\User;
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
                User::with('followings', 'posts', 'followables')
                    ->when($request->input('search'), function ($query, $search) {
                        $query->where('username', 'like', "%{$search}%");
                    })
                    ->withCount(['followings', 'followables', 'posts'])
                    ->with('followings', 'followables')
                    ->paginate(10)
                    ->withQueryString()
            ),
            'filters'                =>  $request->only(['search']),
            'usercount'              =>  User::latest()->count()
        ]);
    }

    public function show(User $user, Request $request)
    {
        return Inertia::render('Users/Show', [
            'profile'       =>  UserResource::make($user),
            'filters'       =>  $request->only(['search']),
        ]);
    }

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
                'website'        =>  Str::limit($user->website, 16),
                'link'           =>  $user->website,
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
                        'name'           =>  Str::limit($followers->name, 8),
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
                'website'        =>  Str::limit($user->website, 16),
                'link'           =>  $user->website,
                'postamount'     =>  $user->posts->count(),
                'followerscount' =>  $user->followers()->count(),
                'followcount'    =>  $user->followings()->count(),
                'isFollowing'    =>  Auth::user()->isFollowing($user),
                'isFollowedBy'   =>  Auth::user()->isFollowedBy($user),
                'followbutton'   =>  Auth::user()->id === $user->id,
                'followers'      =>  $user->followings
                    // NEED: pagination
                    ->map(fn ($follows) => [
                        'name'          =>  Str::limit($follows->followable->name, 8),
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
