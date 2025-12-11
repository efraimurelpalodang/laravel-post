<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home', ['title' => 'home',]);
});
Route::get('/about', function () {
    return view('about', [
        'title' => 'about',
        'nama' => 'Jhon dae'
    ]);
});
Route::get('/blogs', [PostController::class, 'index']);
Route::get('/blog/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('/author/{author:username}', [UserController::class, 'show']);
Route::get('/login', [LoginController::class, 'index']);
