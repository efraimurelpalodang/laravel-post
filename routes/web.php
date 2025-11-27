<?php

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
    return view('posts', ['title' => 'posts',]);
});
