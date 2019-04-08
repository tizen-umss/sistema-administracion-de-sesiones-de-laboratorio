<?php

use Illuminate\Database\Seeder;
use App\Grupo;

class GrupoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupo = Grupo::create([
            'nombreGrupo' => 'grupo1',
            'descGrupo' => 'grupo de materia 1',
            'diaGrupo' => 'martes',
            'horaGrupo' => '12:45-14:15',
            'tipoGrupo' => 'materia',
            'labGrupo' =>  '2',
        ]);
    }
}
