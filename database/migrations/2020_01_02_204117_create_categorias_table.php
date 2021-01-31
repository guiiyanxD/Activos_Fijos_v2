<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('id_categoria');
            $table->timestamps();
            $table->string('nombre');
            $table->string('descripcion');
            // TODO: revisar las clases Rubros y Categorias para definir en que clase van los atributos depreciar y actualiza
            $table->unsignedBigInteger('vida_util');
            $table->unsignedBigInteger('coeficiente_depr');
            $table->unsignedBigInteger('rubro_id');

            $table->foreign('rubro_id')->references('id_rubro')->on('rubros')->onDelete('cascade')->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorias');
    }
}
