<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return view('post.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:150',
            'body' => 'required',
        ]);

        $input = $request->all();

        $post = Post::create($input);

        return back()->with('success', 'Post berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($post)
    {
        $post = Post::findOrFail($post);
        return view('post.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $post)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:150',
            'body' => 'required',
        ]);

        $post = Post::findOrFail($post)->update($request->all());
        return back()->with('success', ' Data telah diedit!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $post)
    {
        $post = Post::find($post);
        $post->delete();

        return back()->with('success', 'Penghapusan berhasil');
    }
}
