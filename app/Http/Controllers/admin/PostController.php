<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStorRequest;
use App\Models\Post;
use Faker\Core\Uuid;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.show', [
            'posts' => Post::latest('id')->simplePaginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostStorRequest $request)
    {
        //    $request->file('thumbnail')->store('public/thumbnail');
        $data = request()->validate([
            'name' => 'required',
            'slug' => 'required|unique:posts,slug',
            'body' => 'required',
            'thumbnail' => 'image',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|exists:tags,id',
        ]);
        $data['user_id'] = auth()->user()->id;
        if (isset($data['thumbnail'])) {
            $filename =   time() . '-' . uniqid() . '.' . request()->file('thumbnail')->getClientOriginalExtension();
            //  $location =  request()->file('thumbnail')->move(public_path('thumbnail') , $filename );
            $location =    request()->file('thumbnail')->storeAs('public/thumbnail', $filename);
            $data['thumbnail']   = $filename;
        }
        // dd(request()->all());
        $post = Post::create($data);
        $post->tags()->sync(request('tag_id'), false);
        return to_route('admin.post.index')->with('success', 'Post Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Post $post)
    {
        $data = request()->validate([
            'name' => 'required',
            'slug' => 'required',
            'body' => 'required',
            'thumbnail' => 'image',
            'category_id' => 'required|exists:categories,id',
            'tag_id' => 'required|exists:tags,id',
        ]);
        $data['user_id'] = auth()->user()->id;
        if (isset($data['thumbnail'])) {
            $filename =   time() . '-' . uniqid() . '.' . request()->file('thumbnail')->getClientOriginalExtension();
            //  $location =  request()->file('thumbnail')->move(public_path('thumbnail') , $filename );
            $location =    request()->file('thumbnail')->storeAs('public/thumbnail', $filename);
            $data['thumbnail']   = $filename;
        }

        $post->update($data);
        $post->tags()->sync(request('tag_id'));
        return to_route('admin.post.index')->with('success', 'Post Updated!');
    }

    public function details(Post $post)
    {
        return view('admin.posts.details', [
            'post' => $post,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return to_route('admin.post.index')->with('success', 'Post Deleted Successfully');
    }
}