<?php

namespace App\Http\Controllers;
use \App\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        // $posts = App\Post::all(); //trae todos los datos
        // $posts = Post::latest('published_at')->get(); //ordena por fecha de creacion
        // $posts = Post::where NotNull('published_at')
        //                 ->where('published_at','<=',Carbon::now())
        //                 ->latest('published_at')
        //                 ->get();
        $posts = Post::published()->get();
        // return view('welcome')->with('posts',$posts); // una forma de pasar valor a la vista with(varible,valor)
        return view('welcome',compact('posts')); // otra forma de pasar valor a la vista compact(valor de $posts)
    }
}
