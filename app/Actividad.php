<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    public function tarea(){
        return $this->belogsTo(Tarea::class);
    }
}
