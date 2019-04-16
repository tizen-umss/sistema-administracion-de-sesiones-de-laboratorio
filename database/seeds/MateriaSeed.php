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
            'nombreMateria' => 'programacion',
            'codigoMateria' => 'pro-50',
            'descripcionMateria' => 'materia con practica de laboratorio',
        ]);

        $materia1 = Materia::create([
            'nombreMateria' => 'elementos',
            'codigoMateria' => 'ele-5',
            'descripcionMateria' => 'materia con practica de laboratorio',
        ]);

        $materia2 = Materia::create([
            'nombreMateria' => 'computacion',
            'codigoMateria' => 'comp-1',
            'descripcionMateria' => 'materia con practica de laboratorio',
        ]);
    }
}
