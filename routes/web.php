<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

// Redirect to login if not authenticated
Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
});

// Routes accessible only to authenticated users
Route::middleware('auth')->group(function () {
    // Logout route
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Routes related to posts
    Route::resource('posts', PostController::class);
});

// Redirect to login if not authenticated, else display posts
Route::get('/welcome', [PostController::class, 'welcome'])->name('welcome');

// Registration
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register');
