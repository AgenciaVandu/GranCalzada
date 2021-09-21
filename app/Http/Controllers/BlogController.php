<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $posts = Post::all();
        return view('blog.index', compact('posts', 'categories'));
    }

    public function show(Post $post)
    {
        $categories = Category::all();
        $posts = Post::take(3)->get();
        return view('blog.article', compact('post', 'categories','posts'));
    }
}
