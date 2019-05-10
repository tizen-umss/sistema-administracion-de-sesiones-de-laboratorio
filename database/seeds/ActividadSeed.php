<?php

use Illuminate\Database\Seeder;
use App\Actividad;
use Carbon\Carbon;

class ActividadSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $actividad = Actividad::create([
            'id'=>'0',
            'observaciones' => '* Copio * Abandono el laboratorio',
            'descripcion' => 'No hizo las tareas',
            'fecha' => Carbon::now(),
            'tareas_id'=>'0'
        ]);
    }
}
