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
            'nombreMateria' => 'programacion',
            'codigoMateria' => 'pro-50',
            'descripcionMateria' => 'materia con practica de laboratorio',
        ]);
    }
}
