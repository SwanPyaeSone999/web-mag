<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class ShowPostController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::orderBy('id','desc')->get() ,
        ]);
    }

    public function details(Post $post)
    {
            return view('details', [
                'post' => $post ,
                'posts' => Post::get() ,
            ]);
    }
}