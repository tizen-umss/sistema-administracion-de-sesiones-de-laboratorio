<?php

use Illuminate\Database\Seeder;
use App\Laboratorio;

class LaboratorioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $laboratorio = Laboratorio::create([
            'nombreLab' => 'labo1',
            'numMaquinas' => '30',
        ]);
        $laboratorio = Laboratorio::create([
            'nombreLab' => 'labo2',
            'numMaquinas' => '35',
        ]);
        $laboratorio = Laboratorio::create([
            'nombreLab' => 'labo3',
            'numMaquinas' => '30',
        ]);
        $laboratorio = Laboratorio::create([
            'nombreLab' => 'labo4',
            'numMaquinas' => '20',
        ]);
        $laboratorio = Laboratorio::create([
            'nombreLab' => 'labo5',
            'numMaquinas' => '38',
        ]);
    }
}
