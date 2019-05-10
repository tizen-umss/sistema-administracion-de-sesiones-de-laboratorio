<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    //

    public function tareas(){
        return $this->hasToMany('App\Tarea','tareas_id');
    }

    public function user(){
        return $this->hasTo('App\User','user_id');
    }
}
