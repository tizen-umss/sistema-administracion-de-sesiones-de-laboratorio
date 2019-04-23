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
            'grupoMateria_id'=>'0',
            'grupoLaboratorio_id'=>'0',
        ]);
    }
}
