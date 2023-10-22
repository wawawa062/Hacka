<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    public function comment(Post $post)
    {
        return view('posts/comment')->with(['post_id'=>$post->id]);
    }
    
    public function store(Request $request)
    {


        $comment = Comment::create([
            'body' => $request["comment"]["body"],
            'user_id' => auth()->user()->id,
            'post_id' => $request["comment"]["post_id"],
        ]);
        return back();
    }
    
    public function show(Comment $comment, Post $post)
    {
        return view('posts/comment_show')->with(['comments'=>$post->comments()->get()]);
    }
}
