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
            'id'=>0,
            'user_id'=>0,
        ]);

        $portafolio = Portafolio::create([
            'id'=>1,
            'user_id'=>1,
        ]);
    }
}
// $table->foreign('archivo_tareas_id')
            // ->references('id')
            // ->on('archivo_tareas')
            // ->onDelete('cascade');