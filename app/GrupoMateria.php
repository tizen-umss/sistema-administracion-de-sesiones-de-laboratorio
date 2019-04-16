<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class GrupoMateria extends Model
{
    use Notifiable;

    protected $table = 'gruposMateria';

    protected $primaryKey = 'id';

    protected $fillable = ['nombreGrupoMat','updated_at','created_at'];

    public function materias(){
        return $this->belongsToMany(Materia::class,'materias','grupoMateria_id','materia_id');
    }
}
