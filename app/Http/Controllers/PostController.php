<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use Cloudinary; 
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
        
        @now == now();
        $displayDate = Carbon::parse('16:00:00');
        
        if (@now >= $displayDate) {
            return view( 'sp-page');
        } else {
            return view('/not-available-page');
        }
        
        $posts = Post::withCount('likes')->orderBy('likes_count', 'desc')->get();
        
        return view('posts/ranking', compact('posts'));
    }

     public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);
    }

    public function store(Post $post, Request $request)
    {
          $input = $request['post'];
         if($request->file('image'))
         { 
             $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
            $input += ['image_url' => $image_url];
         }
   $input +=["user_id"=>Auth::id()];
   
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    
}
