<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog()
    {
        return view('blog/blog');
    }

    public function blogGrid()
    {
        return view('blog/blogGrid');
    }

    public function singleBlog()
    {
        return view('blog/singleBlog');
    }

}
