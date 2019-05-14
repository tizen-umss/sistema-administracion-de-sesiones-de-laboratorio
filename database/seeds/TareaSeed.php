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
            'titulotarea' => 'presentacion tarea practica 1',
            'desctarea' => 'la tarea se eesta presentando incompleta',
            'calificacion' => 5,
            'fecha_entrega' => '2019-05-10 01:00:20.827343',
            'user_id' => 8,
            'portafolio_id' => 1,
        ]);

        $tarea2 = Tarea::create([
            'titulotarea' => 'presentacion tarea practica 6',
            'desctarea' => 'la tarea se completo',
            'calificacion' => 10,
            'fecha_entrega' => '2019-05-10 01:00:20.827343',
            'user_id' => 9,
            'portafolio_id' => 1,
        ]);

        $tarea3 = Tarea::create([
            'titulotarea' => 'presentacion tarea practica 5',
            'desctarea' => 'la tarea se presento',
            'calificacion' => 16,
            'fecha_entrega' => '2019-05-10 01:00:20.827343',
            'user_id' => 10,
            'portafolio_id' => 1,
        ]);
    }
}
