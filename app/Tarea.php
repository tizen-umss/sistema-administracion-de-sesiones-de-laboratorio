<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tarea extends Model
{   
    //Agregado
    protected $table= 'tareas';
    protected $primaryKey = 'id';

    protected $fillable = ['tituloTarea', 'descTarea', 'calificacion', 'fecha_entrega','user_id','portafolio_id', 'remember_token'];
    
    /**
     * Una tarea pertenece a un usuario
     */
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    /**
     * Una tarea tiene uno a muchos archivos de tareas
     */
    public function archivoTareas(){
        return $this->hasMany(ArchivoTarea::class);
    }

    /**
     * Paso de llave primaria por conveniencia (Relacion uno a uno)
     */
    public function publicacions(){
        return $this->hasMany(Publicacion::class);
    }

    public function actividades(){
        return $this->hasMany(Actividad::class);
    }

    public function portafolio(){
        return $this->belongsToMany('App\Portafolio','portafolio_id');
    }
}
