<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivoTareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo_tareas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamp('fechaSubida');
            $table->integer('tarea_id');
            $table->timestamps();

            $table->foreign('tarea_id')
            ->references('id')
            ->on('tareas')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('archivo_tareas');
    }
}
