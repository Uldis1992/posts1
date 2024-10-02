<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

// Route to display the form for creating a new post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Route to handle the form submission (POST request)
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
