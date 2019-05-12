<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('desc');
            $table->timestamp('fechapublicaion');
            $table->timestamp('fechalimite');
            $table->integer('grupos_materia_id')->unsigned();;
            $table->timestamps();

            $table->foreign('grupos_materia_id')
            ->references('id')
            ->on('grupos_materia')
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
        Schema::dropIfExists('publicacions');
    }
}
