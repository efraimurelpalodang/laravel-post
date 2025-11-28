<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', [
            'title' => 'Categories',
            'categories' => Category::all(),
        ]);
    }

    public function show(Category $category)
    {
        return view('posts', [
            'title' => 'post detail',
            'posts' => $category->posts,
            'page' => 'Post in '.$category->name,
        ]);
    }
}
