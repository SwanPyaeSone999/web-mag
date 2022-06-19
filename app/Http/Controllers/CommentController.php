<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post)
    {
        $data = request()->validate([
            'body' => 'required',
        ]);

        $post->comments()->create([
            'user_id' => auth()->user()->id,
            'body' => $data['body'],
        ]);
        return back();
    }
}