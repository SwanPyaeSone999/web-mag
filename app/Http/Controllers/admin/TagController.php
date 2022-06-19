<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tags.show', [
            'tags' => Tag::latest('id')->simplePaginate(5),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $data =  request()->validate([
            'name' => 'required',
        ]);
        Tag::create($data);
        return to_route('admin.tag.index')->with('success', 'Post Created!');
    }

    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', [
            'tag' => $tag,
        ]);
    }

    public function update(Request $request, Tag $tag)
    {
        $data =  request()->validate([
            'name' => 'required',
        ]);
        $tag->update($data);
        return to_route('admin.tag.index')->with('success', 'Post Edited!');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();
        return to_route('admin.tag.index')->with('success', 'Post Deleted!');
    }
}