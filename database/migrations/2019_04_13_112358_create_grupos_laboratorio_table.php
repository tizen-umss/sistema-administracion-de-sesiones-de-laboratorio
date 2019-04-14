<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGruposLaboratorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_laboratorio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombreGrupo');
            $table->integer('materia_id')->unsigned();
            $table->integer('laboratorio_id')->unsigned();
            $table->enum('diaGrupo',['lunes','martes','miercoles','jueves','viernes']);
            $table->enum('horaGrupo',['6:45-8:15','8:15-9:45','9:45-11:15','11:15-12:45','12:45-14:15','14:15-15:45','15:45-17:15','17:15-18:45','18:45-20:15','20:15-21:45']); 

            $table->foreign('materia_id')
                ->references('id')
                ->on('materias')
                ->onDelete('cascade');

            $table->foreign('laboratorio_id')
                ->references('id')
                ->on('laboratorios')
                ->onDelete('cascade');

            // $table->primary(['permission_id', 'role_id']);
   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos_laboratorio');
    }
}
