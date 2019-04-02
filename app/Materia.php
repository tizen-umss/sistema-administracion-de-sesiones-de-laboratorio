<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 *
 * @package App
 * @property string $nombreMateria
 * @property string $codigoMateria
 * @property string $descripcionMateria
 */ 
 
class Materia extends Model
{
    use Notifiable;

    protected $primaryKey = 'id';

    protected $fillable = ['nombreMateria','codigoMateria', 'descripcionMateria','updated_at','created_at'];
 
}
