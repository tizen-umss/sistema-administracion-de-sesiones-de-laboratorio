<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasGruposMateriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias_gruposMateria', function (Blueprint $table) {

            $table->integer('materia_id')->unsigned();
            $table->integer('grupoMateria_id')->unsigned();

            $table->foreign('materia_id')
                ->references('id')
                ->on('materias')
                ->onDelete('cascade');

            $table->foreign('grupoMateria_id')
                ->references('id')
                ->on('gruposMateria')
                ->onDelete('cascade');

            $table->primary(['materia_id', 'grupoMateria_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materias_gruposMateria');
    }
}
