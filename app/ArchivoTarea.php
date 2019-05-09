<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivoTarea extends Model
{
    protected $table= 'ArchivoTareas';
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'desc', 'fechaPublicaion', 'fechaLimite', 'remember_token'];

    /**
     * Una archivo pertenece a una sola tarea
     */
    public function tarea(){
        return $this->belongsTo(Tarea::class);
    }
    
}
