<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('blog', [
            "title" => "Blog - Forum Studi Teknik (FST)",
            "posts" => $posts
        ]);
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Blog - Forum Studi Teknik (FST)",
            "post" => $post
        ]);
    }
}
