<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sortCol = $request->input('sort','name');
        return Post::orderBy($sortCol)->paginate(5);
        // return  response(Post::paginate(5));
    }
    public function store(Request $request)
    {
        Post::create($request->all());
    }
    public function show(Post $post)
    {
        return $post;
    }


    public function update(Request $request, Post $post)
    {
        return $post->update($request->all());
    }


    public function destroy(Post $post)
    {
            return $post->delete();
    }
}