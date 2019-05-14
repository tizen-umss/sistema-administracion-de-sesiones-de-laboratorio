<?php

use Illuminate\Database\Seeder;
use App\Materia;

class MateriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materia = Materia::create([
            'id'=>'0',
            'nombremateria' => 'programacion',
            'codigomateria' => 'pro-50',
            'descripcionmateria' => 'materia con practica de laboratorio',
        ]);

        $materia1 = Materia::create([
            'nombremateria' => 'elementos',
            'codigomateria' => 'ele-5',
            'descripcionmateria' => 'materia con practica de laboratorio',
        ]);

        $materia2 = Materia::create([
            'nombremateria' => 'computacion',
            'codigomateria' => 'comp-1',
            'descripcionmateria' => 'materia con practica de laboratorio',
        ]);

        $materia3 = Materia::create([
            'nombremateria' => 'aso',
            'codigomateria' => 'comp-2',
            'descripcionmateria' => 'materia con practica de laboratorio',
        ]);

        $materia4 = Materia::create([
            'nombremateria' => 'aso',
            'codigomateria' => 'comp-2',
            'descripcionmateria' => 'materia con practica de laboratorio',
        ]);
    }
}
