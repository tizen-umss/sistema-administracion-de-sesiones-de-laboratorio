<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivoPublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archivo_publicacions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->timestamp('fechaPublicacion');
            $table->integer('publicacion_id');
            $table->timestamps();

            $table->foreign('publicacion_id')
            ->references('id')
            ->on('publicacions')
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
        Schema::dropIfExists('archivo_publicacions');
    }
}
