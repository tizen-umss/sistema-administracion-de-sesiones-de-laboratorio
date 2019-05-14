<?php
namespace App\Http\Controllers\Admin;

use App\Post;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{

    public function store(Post $post){
        // $this->validate(request(),[
        //     'photo'=>'image', //jpg png bmp gif svg
        // ]);

        $photo=request()->file('photo')->store('public');

        $photoUrl = Storage::url($photo); 
        Photo::create([
            'url' => $photoUrl,
            'post_id' => $post->id,
        ]);
    }

    public function destroy(Photo $photo){
        $photo->delete();
        return back()->with('flash','Foto eliminada');
    }
}
