<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario_GrupoMat extends Model
{
    // protected $table = 'grupos_laboratorio';
    // protected $fillable = ['nombreGrupoLab','materia_id','laboratorio_id','diaGrupo','horaGrupo','updated_at','created_at'];
 

    public function users(){
        return $this->hasMany(User::class);
    }

    public function gruposMaterias(){
        return $this->hasMany(GrupoMateria::class);
    }
}
