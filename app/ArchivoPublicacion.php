<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArchivoPublicacion extends Model
{
    protected $table = 'ArchivoPublicacions';
    protected $primaryKey = 'id';
    protected $fillable = ['nombre', 'fechaPublicacion', 'remember_token'];
    

    /**
     * Un ArchivoPublicacion pertenece a una publicacion
     */
    public function publicacion(){
        return $this->belongsTo(Publicacion::class);
    }
}
