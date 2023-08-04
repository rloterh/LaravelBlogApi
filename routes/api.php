<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('login', 'App\Http\Controllers\AuthController@login');

// Protected Routes (Requires JWT Token)
Route::group(['middleware' => 'auth:api'], function () {
    // Post Routes
    Route::get('posts', 'App\Http\Controllers\PostController@index');
    Route::post('posts', 'App\Http\Controllers\PostController@store');
    Route::get('posts/{id}', 'App\Http\Controllers\PostController@show');
    Route::put('posts/{id}', 'App\Http\Controllers\PostController@update');
    Route::delete('posts/{id}', 'App\Http\Controllers\PostController@destroy');

    // Like and Comment Routes
    Route::post('posts/{id}/like', 'App\Http\Controllers\PostController@like');
    Route::post('posts/{id}/comment', 'App\Http\Controllers\PostController@comment');
});
