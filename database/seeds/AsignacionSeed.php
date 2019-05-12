<?php

use Illuminate\Database\Seeder;
use App\Asignacion;

class AsignacionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $asignacion = Asignacion::create([
            'id'=>'0',
            'user_id' => '1',
            'grupomateria_id'=>'0',
            'grupolaboratorio_id'=>'0',
        ]);
    }
}
