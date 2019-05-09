<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    //Agregado
    protected $table= 'publicacions';
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'desc', 'fechaPublicaion', 'fechaLimite', 'remember_token'];
    
    /**
     * Una publicacion tiene de uno a muchos ArchivoPublicacions
     */
    public function archivoPublicacions(){
        return $this->hasMany(ArchivoPublicacion::class);
    }

    /**
     * Una publicacion pertenece a una tarea
     */
    public function tarea(){
        return $this->belongsTo(Tarea::class);
    }

    /**
     * Una publicacion tine de un GrupoMateria
     */
    public function grupoMateria(){
        return $this->belongsTo(GrupoMateria::class);
    }
}
