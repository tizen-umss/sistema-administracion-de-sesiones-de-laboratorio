<?php

use Illuminate\Database\Seeder;
use App\Post;
use Carbon\Carbon;
use App\Category;
use App\Tag;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Post::truncate();
        // Category::truncate();
        // Tag::truncate();

        $category = new Category;
        $category->name = "categoria 1";
        $category->save();

        $category = new Category;
        $category->name = "categoria 2";
        $category->save();


        $post = new Post;
        $post->title = "mi primer post";
        $post->excerpt = "extracto de mi primer post";
        $post->body = "contenidio de mi primer post";
        $post->published_at = Carbon::now();
        $post->category_id=1;
        $post->save();
        $post->tags()->attach(Tag::create(['name'=>'etiqueta 1']));

        $post = new Post;
        $post->title = "mi segundo post";
        $post->excerpt = "extracto de mi segundo post";
        $post->body = "contenidio de mi segundo post";
        $post->published_at = Carbon::now();
        $post->category_id=1;
        $post->save();
        $post->tags()->attach(Tag::create(['name'=>'etiqueta 2']));

        $post = new Post;
        $post->title = "mi tercero post";
        $post->excerpt = "extracto de mi tercero post";
        $post->body = "contenidio de mi tercero post";
        $post->published_at = Carbon::now();
        $post->category_id=1;
        $post->save();
        $post->tags()->attach(Tag::create(['name'=>'etiqueta 3']));

        $post = new Post;
        $post->title = "mi cuarto post";
        $post->excerpt = "extracto de mi cuarto post";
        $post->body = "contenidio de mi cuarto post";
        $post->published_at = Carbon::now();
        $post->category_id=2;
        $post->save();
        $post->tags()->attach(Tag::create(['name'=>'etiqueta 4']));

        $post = new Post;
        $post->title = "mi quinto post";
        $post->excerpt = "extracto de mi quinto post";
        $post->body = "contenidio de mi quinto post";
        $post->published_at = Carbon::now();
        $post->category_id=2;
        $post->save();
        $post->tags()->attach(Tag::create(['name'=>'etiqueta 5']));





        // $tag = new Tag;
        // $tag->name = "tag 1";
        // $tag->save();

        // $tag = new Tag;
        // $tag->name = "tag 2";
        // $tag->save();

        // $tag = new Tag;
        // $tag->name = "tag 3";
        // $tag->save();

        
    }
}

