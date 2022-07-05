<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    // Change password
    public function changePassword() {
        return view('user.settings.password');
    }

    public function updatePassword(Request $request) {
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        # Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old password does not match.");
        }

        # Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }

    // Update display name and bio
    public function updateProfile(Request $request, User $user) {
        // Validate fields
        $formFields = $request->validate([
            'name' => 'nullable|max:30',
            'bio' => 'nullable|max:150'
        ]);

        # Update the name and bio
        User::whereId(auth()->user()->id)->update([
            'name' => $request->name,
            'bio' => $request->bio
        ]);

        return back()->with('status', 'Profile updated.');
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
