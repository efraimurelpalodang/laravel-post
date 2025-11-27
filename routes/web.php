<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

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
