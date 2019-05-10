<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $table= 'actividads';

    protected $primaryKey = 'id';

    // protected $fillable = ['name','apellidoPaterno', 'apellidoMaterno', 'cedula', 'codigoSiss', 'email', 'password', 'remember_token'];
    protected $fillable = ['observaciones','descripcion','fecha','tareas_id'];
    
    public function tarea(){
        return $this->belongsTo('App\Tarea','tareas_id');
    }
}
