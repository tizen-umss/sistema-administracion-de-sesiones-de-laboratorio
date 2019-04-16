<?php

use Illuminate\Database\Seeder;
use App\GrupoLaboratorio;

class GrupoLaboratorioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupoLaboratorio = GrupoLaboratorio::create([
            'id'=>'0',
            'nombreGrupoLab' => 'grupo1',
            'materia_id' => '1',
            'laboratorio_id' => '1',
            'diaGrupo' => 'lunes',
            'horaGrupo' => '12:45-14:15',
        ]);
    }
}
