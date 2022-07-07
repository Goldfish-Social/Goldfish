<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('posts.index');
    }

    public function users() {
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }
    public function user(User $user) { 
        return view('users.show', [
            'posts' => $user->posts,
            'user' => $user
        ]);
    }
    

    
}
