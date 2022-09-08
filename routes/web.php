<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\NotificationsController;


Route::get('/', [HomeController::class, 'welcome'])->name('landing')->middleware('guest');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('@{user:username}', [UserController::class, 'show'])->name('user-profile');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('show-post');
// Route::get('/test', [HomeController::class, 'test']);
Route::get('/community', [UserController::class, 'index'])->name('community');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/home', [TimelineController::class, 'home'])->name('home');
    Route::post('/home', [PostController::class, 'store']);
    Route::get('/public', [TimelineController::class, 'public'])->name('public-timeline');
    Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
    Route::post('/posts/{post}/reply', [ReplyController::class, 'store'])->name('reply');
    Route::delete('/replies/{reply}/delete', [ReplyController::class, 'destroy'])->name('reply.destroy');
    Route::delete('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('@{user:username}/follows', [UserController::class, 'follows'])->name('user-profile-follows');
    Route::get('@{user:username}/followers', [UserController::class, 'followers'])->name('user-profile-followers');
    Route::post('/{user:username}/follow', [UserController::class, 'follow'])->name('follow');
    Route::post('/posts/{post}/like', [PostController::class, 'toggleLike'])->name('like');
    Route::get('/notifications', [NotificationsController::class, 'index'])->name('notifications');
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/admin/users', [AdminController::class, 'users'])->name('admin.users');
        Route::get('/admin/posts', [AdminController::class, 'posts'])->name('admin.posts');
        Route::delete('/posts/{post}/delete', [AdminController::class, 'deletePost'])->name('admin.post.destroy');
        Route::delete('/@{user:id}/delete', [AdminController::class, 'deleteUser'])->name('admin.user.destroy');
    });
});
