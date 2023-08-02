<?php

use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Registration
Route::get('/register', 'AuthController@showRegistrationForm')->name('register');
Route::post('/register', 'AuthController@register');

// Login
Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@login');

// Logout
Route::post('/logout', 'AuthController@logout')->name('logout');

// All Posts
Route::get('/posts', 'PostController@index')->name('all_posts');

// Post Details
Route::get('/posts/{id}', 'PostController@show')->name('post_details');

// Create Post
Route::get('/posts/create', 'PostController@create')->name('create_post');
Route::post('/posts', 'PostController@store');

// Edit Post
Route::get('/posts/{id}/edit', 'PostController@edit')->name('edit_post');
Route::put('/posts/{id}', 'PostController@update');

// Delete Post
Route::delete('/posts/{id}', 'PostController@destroy')->name('delete_post');
