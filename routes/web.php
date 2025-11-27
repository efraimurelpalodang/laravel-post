<?php

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
Route::get('/blogs', function () {
    $posts = Post::all();
    return view('posts', [
        'title' => 'posts',
        'posts' => $posts
    ]);
});
Route::get('/blog/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'post detail',
        'post' => $post
    ]);
});
