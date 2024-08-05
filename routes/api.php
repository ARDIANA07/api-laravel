<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\AccessCommentar;
use App\Http\Middleware\AccessPost;

// route login
Route::post('/login', [AuthController::class, 'login']);
// route middleware
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::patch('/posts/{id}', [PostController::class, 'update'])->middleware(AccessPost::class);
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->middleware(AccessPost::class);

    //router comentar
    Route::post('/comment', [CommentController::class, 'store']);
    Route::patch('/comment/{id}', [CommentController::class, 'update'])->middleware(AccessCommentar::class);
    Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->middleware(AccessCommentar::class);
});
//route post
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);
