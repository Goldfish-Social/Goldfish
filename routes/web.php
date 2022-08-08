<?php

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'landing'])->name('landing')->middleware('guest');
Route::get('@{user:username}', [UserController::class, 'show'])->name('user-profile');
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post}', [PostController::class, 'show'])->name('show-post');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/home', [PostController::class, 'index'])->name('home');
    Route::post('/home', [PostController::class, 'store']);
    Route::get('dashboard', [PostController::class, 'index'])->name('dashboard');
    Route::delete('/posts/{post}/delete', [PostController::class, 'destroy'])->name('posts.destroy');
    Route::get('/community', [UserController::class, 'index']);
    Route::get('/users', function () {
        return Inertia::render('Users/Index', [
            'users' => User::query()

            ->when(Request::input('search'), function ($query, $search) {
                $query->where('username', 'like', "%{$search}%");
            })
            
            ->paginate(10)
            ->withQueryString()
            ->through(fn($user) => [
                'id'    =>  $user->id,
                'name'  =>  $user->name,
                'username'  =>  $user->username,
                'avatar'    => $user->getProfilePhotoUrlAttribute(),
                'about'     => $user->about
            ]),

            'filters' => Request::only(['search'])
        ]);
    })->name('users');
});
