<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CategoryController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth.jwt'])->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/bio', [BioController::class, 'getPostUser']);
    Route::resource('/posts', PostController::class);
    Route::post('/posts/{post}/comments', [CommentController::class, 'store']);
    Route::post('/posts/{post}/like', [PostController::class, 'like']);
    Route::get('/categories', [CategoryController::class, 'index']);
});

// // Authentication Routes
// Route::post('register', 'App\Http\Controllers\AuthController@register');
// Route::post('login', 'App\Http\Controllers\AuthController@login');

// // Protected Routes (Requires JWT Token)
// Route::group(['middleware' => 'auth:api'], function () {
//     // Post Routes
//     Route::get('posts', 'App\Http\Controllers\PostController@index');
//     Route::post('posts', 'App\Http\Controllers\PostController@store');
//     Route::get('posts/{id}', 'App\Http\Controllers\PostController@show');
//     Route::put('posts/{id}', 'App\Http\Controllers\PostController@update');
//     Route::delete('posts/{id}', 'App\Http\Controllers\PostController@destroy');

//     // Like and Comment Routes
//     Route::post('posts/{id}/like', 'App\Http\Controllers\PostController@like');
//     Route::post('posts/{id}/comment', 'App\Http\Controllers\PostController@comment');
// });
