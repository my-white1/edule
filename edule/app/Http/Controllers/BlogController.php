<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function show()
    {
        $post = 1;
        return view('blog.posts.show', compact('post'));
    }
}
