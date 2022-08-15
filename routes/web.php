<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExploreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'landing'])->name('landing')->middleware('guest');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/terms', [AboutController::class, 'terms'])->name('terms');
Route::get('/privacy', [AboutController::class, 'privacy'])->name('privacy');
Route::get('@{user:username}', [UserController::class, 'show'])->name('user-profile');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('show-post');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/home', [TimelineController::class, 'home'])->name('home');
    Route::post('/home', [PostController::class, 'store']);
    Route::get('/posts', [PostController::class, 'index']);
    Route::get('/community', [UserController::class, 'index'])->name('community');
    Route::get('/public', [TimelineController::class, 'public'])->name('public-timeline');
    Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
    Route::post('/posts/{post}/reply', [ReplyController::class, 'store'])->name('reply');
    Route::delete('/replies/{reply}/delete', [ReplyController::class, 'destroy'])->name('reply.destroy');
    Route::delete('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('@{user:username}/follows', [UserController::class, 'follows'])->name('user-profile-follows');
    Route::get('@{user:username}/followers', [UserController::class, 'followers'])->name('user-profile-followers');
    Route::post('/{user:username}/follow', [UserController::class, 'follow'])->name('follow');
    Route::post('/posts/{post}/like', [PostController::class, 'like'])->name('like');
});
