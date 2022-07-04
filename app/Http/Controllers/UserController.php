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
}
