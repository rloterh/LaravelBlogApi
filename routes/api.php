<?php

use Illuminate\Support\Facades\Route;

Route::post('/register', 'App\Http\Controllers\API\AuthController@register');
Route::post('/login', 'App\Http\Controllers\API\AuthController@login');

// Protected routes
Route::middleware('auth:api')->group(function () {
    Route::get('/dashboard', 'App\Http\Controllers\API\AuthController@dashboard');
    Route::post('/logout', 'App\Http\Controllers\API\AuthController@logout');

    // Post routes
    Route::get('/posts', 'App\Http\Controllers\API\PostController@index');
    Route::get('/posts/{id}', 'App\Http\Controllers\API\PostController@show');
    Route::post('/posts', 'App\Http\Controllers\API\PostController@store');
    Route::put('/posts/{id}', 'App\Http\Controllers\API\PostController@update');
    Route::delete('/posts/{id}', 'App\Http\Controllers\API\PostController@destroy');
    Route::post('/posts/{id}/like', 'App\Http\Controllers\API\PostController@like');
    Route::post('/posts/{id}/comment', 'App\Http\Controllers\API\PostController@comment');
});

// Redirect to login page for all other routes
Route::fallback(function () {
    return response()->json(['error' => 'Route not found'], 404);
});
