<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Returns the home page with all posts
Route::get('/', [PostController::class, 'index'])->name('posts.index');

// Returns the form for adding a post
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// Adds a post to the database
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Returns a page that shows a full post
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

// Returns the form for editing a post
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');

// Updates a post
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update');

// Deletes a post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');