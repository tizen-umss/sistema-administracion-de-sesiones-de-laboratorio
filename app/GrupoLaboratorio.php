<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoLaboratorio extends Model
{
    protected $table = 'grupos_laboratorio';
    protected $fillable = ['nombreGrupoLab','materia_id','laboratorio_id','diaGrupo','horaGrupo','updated_at','created_at'];
 

    public function materia(){
        return $this->belongsTo('App\Materia');
    }

    public function laboratorio(){
        return $this->belongsTo('App\Laboratorio');
    }

}

