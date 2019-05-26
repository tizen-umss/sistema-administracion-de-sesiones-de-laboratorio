<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{
    
    public function index(){
        $posts = Post::all();
        // return $posts->tags;
        return view('admin.posts.index',compact('posts'));
    }

    // public function create(){
    //     $categories = Category::all();
    //     $tags = Tag::all();
    //     return view('admin.posts.create',compact('categories','tags'));
    // }

    public function store(Request $request){

        $this->validate($request, ['title' => 'required']);
        
        $post = Post::create([
            'title'=>$request->get('title')
            ]);
        return redirect()->route('admin.posts.edit',$post);

    }

    public function edit(Post $post){
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.edit',compact('categories','tags','post'));

    }

    public function update(Post $post, Request $request){
        
        $this->validate($request, [
            'title'=>'required', 
            'body'=>'required',
            'category'=>'required',
            'tags' => 'required',
            'excerpt' => 'required',
            ]);
        
        // return $request->all();
        $post->title = $request->get('title');
        $post->body = $request->get('body');
        $post->excerpt = $request->get('excerpt');
        $post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
        $post->category_id = $request->get('category');
        $post->save();

        // $post->tags()->attach($request->get('tags'));
        $post->tags()->sync($request->get('tags'));

        // return back()->with('flash','Tu publicacion a sido guardado');
        return redirect()->route('admin.posts.edit',$post)->with('flash','Tu publicacion a sido guardada');
    }

    // public function store(Request $request){
        
    //     $this->validate($request, [
    //         'title'=>'required', 
    //         'body'=>'required',
    //         'category'=>'required',
    //         'tags' => 'required',
    //         'excerpt' => 'required',
    //         ]);
        
    //     // return $request->all();
    //     $post = new Post;
    //     $post->title = $request->get('title');
    //     $post->body = $request->get('body');
    //     $post->excerpt = $request->get('excerpt');
    //     $post->published_at = $request->has('published_at') ? Carbon::parse($request->get('published_at')) : null;
    //     $post->category_id = $request->get('category');
    //     $post->save();

    //     $post->tags()->attach($request->get('tags'));

    //     return back()->with('flash','Tu publicacion a sido creado');
        
        


    // }
}
