<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostComment;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(Post $post)
  {
    $comments = $post->comments()->get();

    return view('post-comments.index', compact('post', 'comments'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Post $post)
  {
    return view('post-comments.create', compact('post'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Post $post, Request $request)
  {
    $post->comments()->create([
      'comment' => $request->comment
    ]);

    return to_route('posts.comments.index', $post->id);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Post $post, PostComment $comment)
  {
    return view('post-comments.edit', compact('post', 'comment'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Post $post, PostComment $comment)
  {
    $comment->comment = $request->comment;
    $comment->save();

    return to_route('posts.comments.index', $post->id);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Post $post, PostComment $comment)
  {
    $comment->delete();

    $comments = $post->comments()->get();

    return view('post-comments.index', compact('post', 'comments'));
  }
}