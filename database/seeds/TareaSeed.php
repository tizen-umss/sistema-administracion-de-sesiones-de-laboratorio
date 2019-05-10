<?php

use Illuminate\Database\Seeder;
use App\Tarea;

class TareaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarea = Tarea::create([
            'id'=>'0',
            'tituloTarea' => 'presentacion tarea practica 1',
            'descTarea' => 'la tarea se eesta presentando incompleta',
            'calificacion' => 5,
            'fecha_entrega' => '2019-05-10 01:00:20.827343',
            'user_id'=>'0'
        ]);
    }
}
