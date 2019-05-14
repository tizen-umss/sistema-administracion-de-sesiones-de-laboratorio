<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $dates=['published_at'];

    protected $fillable=['title','body'];

    public function category(){ //$post->category->name
        return $this->belongsTo('App\Category','category_id');
    }

    public function tags(){
        return $this->belongsToMany('App\Tag');
    }

    public function photos(){
        return $this->hasMany('App\Photo');
    }

    public function scopePublished($query){
        $query->whereNotNull('published_at')
                        ->where('published_at','<=',Carbon::now())
                        ->latest('published_at');

    }
}
