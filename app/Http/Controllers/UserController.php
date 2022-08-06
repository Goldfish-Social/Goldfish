<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return Inertia::render('Users/Index', [
            'users' => User::query()

            ->when($request('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id'    =>  $user->id,
                'name'  =>  $user->name,
                'avatar'    => $user->getProfilePhotoUrlAttribute(),
                'about'     => $user->about
            ]),

            'filters' => $request->only(['search'])
        ]);
    }

    public function show(User $user)
    {
        return Inertia::render('Users/Show', [
            'user' => [
                'id'                =>  $user->id,
                'name'              =>  $user->name,
                'about'             => $user->about,
                'avatar'            =>  $user->getProfilePhotoUrlAttribute(),
                'time'             =>  $user->created_at->diffForHumans(),
                'username'          =>  $user->username,
            ]
            ]);
    }


    public function shower()
    {
        return Inertia::render('Users/Show', [
            'users' => User::all()->map(function ($user) {
                return [
                    'id' => $user->id,
                    'name' => $user->name,
                    'username' => $user->username
                ];
            })
        ]);
    }
}
