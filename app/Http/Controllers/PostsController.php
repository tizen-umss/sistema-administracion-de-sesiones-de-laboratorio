<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function show($id){
        $post = Post::find($id);
        return view('posts.show',compact('post'));
    }
}
