<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'guest'], function() {
    Route::get('/', [HomeController::class, 'landing'])->name('landing');
});

// About, terms & privacy
Route::group(['prefix' => 'about'], function () {
    Route::get('privacy', [PageController::class, 'privacy']);
    Route::get('terms', [PageController::class, 'terms']);
});

Auth::routes(['verify' => true]);
Route::group(['middleware' => 'auth'], function () {
    // Logout
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'i'], function () {
    // Redirect /i 
    Route::get('/', [HomeController::class, 'home']);
    // Home after login
    Route::get('home', [PostController::class, 'index'])->name('home');
    // User account
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('settings', [UserController::class, 'show']);
        Route::get('password', [UserController::class, 'show'])->name('username');
    });
    // All posts
    Route::get('web', [HomeController::class, 'index']);
    // Show Create Form
    Route::get('create', [PostController::class, 'create']);
    // Store Listing Data
    Route::post('post', [PostController::class, 'store'])->name('post');
    // Single post
    Route::get('posts/{post}', [PostController::class, 'show'])->whereAlphaNumeric('post');
    // Users page
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('{user}', [UserController::class, 'show']);
        Route::get('{username}', [UserController::class, 'show'])->name('username');
    });
    // Profile page (demo)
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [UserController::class, 'profile']);
        Route::get('{id}', [ProfileController::class, 'show'])->whereAlphaNumeric('id');
    });
    
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
