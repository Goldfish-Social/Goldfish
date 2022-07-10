<?php

use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TrendingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('landing');
Route::group(['prefix' => 'about'], function () {
    Route::get('/', [RouteController::class, 'about'])->name('about');
    Route::get('privacy', [RouteController::class, 'privacy'])->name('privacy');
    Route::get('terms', [RouteController::class, 'terms'])->name('terms');
    Route::get('guidelines', [RouteController::class, 'guidelines'])->name('guidelines');
    Route::get('contact', [RouteController::class, 'contact'])->name('contact');
});
Route::group(['prefix' => 'i'], function () {
    Route::get('home', [PostController::class, 'index'])->name('home');
    Route::get('posts/{post}', [PostController::class, 'show'])->whereAlphaNumeric('post');
    Route::post('posts/{post}/reply', [PostCommentsController::class, 'store'])->name('reply');
    Route::get('users', [UserController::class, 'users'])->name('users');
});
Route::get('@{user:username}', [UserController::class, 'user'])->name('user.view');
Auth::routes(['verify' => true]);
Route::group(['middleware' => 'auth'], function () {
    Route::post('logout', [UserController::class, 'logout'])->name('logout');
});
Route::group(['middleware' => ['auth', 'verified'], 'prefix' => 'i'], function () {
    Route::get('/', [RouteController::class, 'web']);
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', [UserController::class, 'index']);
        Route::group(['prefix' => 'settings'], function () {
            Route::get('/', [UserController::class, 'settings'])->name('settings');
            Route::get('profile', [UserController::class, 'profile'])->name('profile');
            Route::post('profile/update', [UserController::class, 'updateProfile'])->name('update-profile');
            Route::get('password', [UserController::class, 'password'])->name('password');
            Route::post('password/update', [UserController::class, 'updatePassword'])->name('update-password');
            Route::get('avatar', [UserController::class, 'avatar'])->name('avatar');
            Route::post('avatar/update', [UserController::class, 'updateAvatar'])->name('update-avatar');
            Route::post('avatar/update/cover', [UserController::class, 'updateCover'])->name('update-cover');
            Route::get('security', [UserController::class, 'security'])->name('security');
            Route::get('sessions', [UserController::class, 'sessions'])->name('sessions');
            Route::get('danger', [UserController::class, 'danger'])->name('danger');
        });
    });
    Route::group(['prefix' => 'notifications'], function () {
        Route::get('/', [NotificationController::class, 'index'])->name('notifications');
    });
    Route::get('web', [PostController::class, 'index']);
    Route::get('create', [PostController::class, 'create']);
    Route::post('posts/like', [PostController::class, 'postLikePost'])->name('like');
    Route::post('submit', [PostController::class, 'store'])->name('store');
    Route::delete('posts/{post}', [PostController::class, 'destroy']);
    Route::group(['prefix' => 'discover'], function () {
        Route::get('/', [DiscoverController::class, 'index'])->name('discover');
    });
    Route::group(['prefix' => 'trending'], function () {
        Route::get('/', [TrendingController::class, 'index'])->name('trending');
    });
    Route::group(['prefix' => 'groups'], function () {
        Route::get('/', [GroupController::class, 'index'])->name('groups');
        Route::get('create', [GroupController::class, 'create'])->name('create-group');
    });
    Route::group(['prefix' => 'pages'], function () {
        Route::get('/', [PageController::class, 'index'])->name('pages');
        Route::get('create', [PageController::class, 'create'])->name('create-page');
    });
    
});