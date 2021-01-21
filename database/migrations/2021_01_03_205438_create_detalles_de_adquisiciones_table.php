<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallesDeAdquisicionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles_de_adquisiciones', function (Blueprint $table) {
            $table->id('id_det_adquisicion');
            $table->unsignedBigInteger('adquisicion_id');
            $table->unsignedBigInteger('categoria_id');
            $table->string('nombre');

            $table->foreign('categoria_id')->references('id_categoria')->on('categorias');
            $table->foreign('adquisicion_id')->references('id_adquisicion')->on('adquisiciones');
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
        Schema::dropIfExists('detalles_de_adquisiciones');
    }
}
