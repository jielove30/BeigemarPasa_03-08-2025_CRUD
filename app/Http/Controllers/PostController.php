<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
  // Display a listing of the resource
  public function index()
  {
    $posts = Post::all();
    return view('posts.index', compact('posts'));
  }

  // Store a newly created resource in storage
  public function store(Request $request)
  {
    $request->validate([
        'title' => 'required|max:255',
        'body' => 'required|max:1000',
    ]);

    Post::create($request->all());

    // Redirect with success message
    return redirect()->route('posts.index')->with('success', 'Post created successfully.');
  }

  // Update the specified resource in storage
  public function update(Request $request, $id)
  {
    $request->validate([
      'title' => 'required|max:255',
      'body' => 'required',
    ]);

    $post = Post::find($id);
    $post->update($request->all());

    // Redirect with success message
    return redirect()->route('posts.index')
      ->with('success', 'Post updated successfully.');
  }

  // Remove the specified resource from storage
  public function destroy($id)
  {
    $post = Post::find($id);
    $post->delete();

    // Redirect with success message
    return redirect()->route('posts.index')
      ->with('success', 'Post deleted successfully');
  }

  // Routes functions

  public function create()
  {
    return view('posts.create');
  }

  public function show($id)
  {
    $post = Post::find($id);
    return view('posts.show', compact('post'));
  }

  public function edit($id)
  {
    $post = Post::find($id);
    return view('posts.edit', compact('post'));
  }
}