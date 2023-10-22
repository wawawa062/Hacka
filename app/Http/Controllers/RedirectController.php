<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Cloudinary; 

class RedirectController extends Controller

{
    public function checkAndRedirect(Post $post)
    {
        if (rand(1,2) == 1) {
            return redirect('surprise/show');
        }
        
        else return view('posts/show')->with(['post' => $post]);
    }
    
    public function show()
    {
        return view('surprise/show');
    }
}
