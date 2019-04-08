<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $fillable = ['nombreGrupo','descGrupo','diaGrupo','horaGrupo','tipoGrupo', 'labGrupo','updated_at','created_at'];
 
}
