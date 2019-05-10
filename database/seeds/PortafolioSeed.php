<?php

use Illuminate\Database\Seeder;
use App\Portafolio;

class PortafolioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portafolio = Portafolio::create([
            'id'=>'0',
        ]);
    }
}
