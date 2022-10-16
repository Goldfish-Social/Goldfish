<?php

use App\Http\Controllers\APIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/posts', [APIController::class, 'index']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
