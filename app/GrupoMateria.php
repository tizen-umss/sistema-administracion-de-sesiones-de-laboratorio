<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class GrupoMateria extends Model
{
    protected $table = 'grupos_materia';
    protected $fillable = ['nombreGrupoMat','materia_id','user_id','updated_at','created_at'];

    public function materia(){
        return $this->belongsTo('App\Materia');
    }

    public function usuario(){
        return $this->belongsTo('App\User','user_id');
    }

    public function asignacion(){
        return $this->hasOne('App\Asignacion');
    }

    /**
     * Un grupo de materia, tiene muchas publicaciones
     */
     public function publicacions(){
        return $this->hasMany(Publicacion::class);
     }
}


// <?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class GrupoLaboratorio extends Model
// {
//     protected $table = 'grupos_laboratorio';
//     protected $fillable = ['nombreGrupoLab','materia_id','laboratorio_id','diaGrupo','horaGrupo','updated_at','created_at'];
 

//     public function materia(){
//         return $this->belongsTo('App\Materia');
//     }

//     public function laboratorio(){
//         return $this->belongsTo('App\Laboratorio');
//     }

// }

