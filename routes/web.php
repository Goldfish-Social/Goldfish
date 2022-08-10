<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\UserController;


Route::get('/', [HomeController::class, 'landing'])->name('landing')->middleware('guest');
Route::get('/posts', [PostController::class, 'index']);
Route::get('/community', [UserController::class, 'index'])->name('community');
Route::get('@{user:username}', [UserController::class, 'show'])->name('user-profile');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('show-post');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/home', [TimelineController::class, 'home'])->name('home');
    Route::post('/home', [PostController::class, 'store']);
    Route::get('/dashboard', [PostController::class, 'index'])->name('dashboard');
    Route::get('/public', [TimelineController::class, 'public'])->name('public-timeline');
    Route::delete('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::post('/{user:username}/follow', [UserController::class, 'follow'])->name('follow');
    Route::post('/posts/{post}/like', [PostController::class, 'like'])->name('like');
});
