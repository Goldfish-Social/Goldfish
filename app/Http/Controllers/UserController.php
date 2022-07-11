<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller {

    // Logout
    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    // Get user data
    public function index() {
        //$users = DB::table('users')->get();
        $users = User::with('posts', 'comments')->simplePaginate(10); 
        return view('users.index', ['users' => $users]);
    }
    
    // Show User
    public function show(User $user, Post $post) { 
        $post = auth()->user()->posts;
        return view('users.show', [
            'user' => $user,
            'posts' => $post
        ]); 
    }
    // Fetch users
    public function users() {
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }
    // Fetch user profile
    public function user(User $user) { 
        return view('users.show', [
            'posts' => $user->posts,
            'user' => $user
        ]);
    }
    // Change password view
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
            return back()->with('error', 'Old password does not match.');
        }
        # Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with('status', 'Password changed successfully.');
    }

    // Update display name, bio and website
    public function updateProfile(Request $request, User $user) {
        
        // Validate fields
        $request->validate([
            'name' => 'nullable|max:30',
            'bio' => 'nullable|max:150',
            'website' => 'nullable'
        ]);
        # Update the name and bio
        User::whereId(auth()->user()->id)->update([
            'name' => $request->name,
            'bio' => $request->bio,
            'website' => $request->website
        ]);
        return back()->with('status', 'Profile updated.');
    }

    // Update avatar
    public function updateAvatar(Request $request) {
        // Validate fields
        $request->validate([
            'avatar' => ['required','mimes:jpg,jpeg,png','max:10048']
        ]);
        $avatar = $request->file('avatar')->store('uploads/avatars', 'public');
        User::whereId(auth()->user()->id)->update([
            'avatar' => $avatar
        ]);
        
        // Return back
        return back()->with('status', 'Avatar updated.');
    }
    // Update cover
    public function updateCover(Request $request) {
        // Validate fields
        $request->validate([    
            'header_bg' => ['required','mimes:jpg,jpeg,png','max:10048']
        ]);
        $cover = $request->file('header_bg')->store('uploads/covers', 'public');
        User::whereId(auth()->user()->id)->update([
            'header_bg' => $cover
        ]);
        // Return back
        return back()->with('status', 'Cover updated.');
    }
    // Follow user
    public function followUser(Request $request, User $user) {
        $follow = User::find($request->user_id);
        $user = auth()->user()->id;
        $user->follow($follow);
        // Return back
        return back()->with('status', 'Cover updated.');      
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
