<?php

use Illuminate\Database\Seeder;
use App\GrupoMateria;

class GrupoMateriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $grupoMateria = GrupoMateria::create([
            'id'=>'0',
            'nombregrupomat' => 'grupo1',
            'materia_id' => '1',
            'user_id' => '1',
        ]);

        $grupoMateria1 = GrupoMateria::create([
            'nombregrupomat' => 'grupo1',
            'materia_id' => '2',
            'user_id' => '8',
        ]);

        $grupoMateria2 = GrupoMateria::create([
            'nombregrupomat' => 'grupo1',
            'materia_id' => '2',
            'user_id' => '9',
        ]);

        $grupoMateria3 = GrupoMateria::create([
            'nombregrupomat' => 'grupo1',
            'materia_id' => '3',
            'user_id' => '10',
        ]);

        $grupoMateria4 = GrupoMateria::create([
            'nombregrupomat' => 'grupo1',
            'materia_id' => '2',
            'user_id' => '11',
        ]);
    }
}
