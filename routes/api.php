<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Authentication Routes
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

// Protected Routes (Requires JWT Token)
Route::group(['middleware' => 'auth:api'], function () {
    // Post Routes
    Route::get('posts', 'PostController@index');
    Route::post('posts', 'PostController@store');
    Route::get('posts/{id}', 'PostController@show');
    Route::put('posts/{id}', 'PostController@update');
    Route::delete('posts/{id}', 'PostController@destroy');

    // Like and Comment Routes
    Route::post('posts/{id}/like', 'PostController@like');
    Route::post('posts/{id}/comment', 'PostController@comment');
});
