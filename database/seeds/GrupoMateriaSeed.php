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
    }
}
