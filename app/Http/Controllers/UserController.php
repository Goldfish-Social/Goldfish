<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    // Logout
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    // Get user data
    public function index() {
        $users = DB::table('users')->get();
 
        return view('users.index', ['users' => $users]);
    }

    // Show User
    public function show(User $user) {
        return view('users.show', [
            'user' => $user
        ]); 
    }


    // Settings user
    public function settings() {
        return view('settings.index');
    }
    // Settings profile
    public function profile() {
        return view('settings.profile');
    }
    // Settings password
    public function password() {
        return view('settings.password');
    }
    // Settings profile
    public function avatar() {
        return view('settings.avatar');
    }
    // Settings profile
    public function security() {
        return view('settings.security');
    }
    // Settings sessions
    public function sessions() {
        return view('settings.sessions');
    }
    // Settings danger
    public function danger() {
        return view('settings.danger');
    }
}
