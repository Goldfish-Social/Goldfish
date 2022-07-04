<?php

use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TrendingController;
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
    Route::get('/', [PageController::class, 'landing'])->name('landing');
});

// About, terms & privacy
Route::group(['prefix' => 'about'], function () {
    Route::get('/', [PageController::class, 'about'])->name('about');
    Route::get('privacy', [PageController::class, 'privacy'])->name('privacy');
    Route::get('terms', [PageController::class, 'terms'])->name('terms');
    Route::get('guidelines', [PageController::class, 'guidelines'])->name('guidelines');
    Route::get('contact', [PageController::class, 'contact'])->name('contact');
});

Auth::routes(['verify' => true]);
Route::group(['middleware' => 'auth'], function () {
    // Logout
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'i'], function () {
    // All under /i
    Route::get('/', [PageController::class, 'web']);
    // /i/home
    Route::get('home', [PostController::class, 'index'])->name('home');
    // /i/account
    Route::group(['prefix' => 'account'], function () {
        // All under /i/account
        Route::get('/', [UserController::class, 'index']);
        Route::group(['prefix' => 'settings'], function () {
            // All under /i/account/settings
            Route::get('/', [UserController::class, 'settings'])->name('settings');
            Route::get('profile', [UserController::class, 'profile'])->name('profile');
            Route::get('password', [UserController::class, 'password'])->name('password');
            Route::get('avatar', [UserController::class, 'avatar'])->name('avatar');
            Route::get('security', [UserController::class, 'security'])->name('security');
            Route::get('sessions', [UserController::class, 'sessions'])->name('sessions');
            Route::get('danger', [UserController::class, 'danger'])->name('danger');
        });
    });
    // All posts
    Route::get('web', [HomeController::class, 'index']);
    // Show Create Form
    Route::get('create', [PostController::class, 'create']);
    // Store Listing Data
    Route::post('submit', [PostController::class, 'store'])->name('store');
    // Single post
    Route::get('posts/{post}', [PostController::class, 'show'])->whereAlphaNumeric('post');
    // Users group
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::get('{user}', [UserController::class, 'show']);
        Route::get('{username}', [UserController::class, 'show'])->name('username');
    });
    // Discover group
    Route::group(['prefix' => 'discover'], function () {
        Route::get('/', [DiscoverController::class, 'index'])->name('discover');
    });
    // Discover page
    Route::group(['prefix' => 'trending'], function () {
        Route::get('/', [TrendingController::class, 'index'])->name('trending');
    });
    // Profile page (demo)
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [UserController::class, 'profile']);
        Route::get('{id}', [ProfileController::class, 'show'])->whereAlphaNumeric('id');
    });
    
});