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

    return view('posts.index', compact('posts'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('posts.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    Post::create([
      'title' => $request->title
    ]);

    return to_route('posts.index');
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Post $post)
  {
    return view('posts.edit', compact('post'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Post $post)
  {
    $post->title = $request->title;
    $post->save();

    return to_route('posts.index');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Post $post)
  {
    $post->delete();

    return to_route('posts.index');
  }
}