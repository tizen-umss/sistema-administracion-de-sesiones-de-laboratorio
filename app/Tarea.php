<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Tarea extends Model
{   
    //Agregado
    protected $table= 'tareas';
    protected $primaryKey = 'id';

    protected $fillable = ['tituloTarea', 'descTarea', 'calificacion', 'fecha_entrega', 'remember_token'];
    
    /**
     * Una tarea pertenece a un usuario
     */
    public function user(){
        return $this->belongsTo(User::class);
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
}