<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRubrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rubros', function (Blueprint $table) {
            $table->id('id_rubro');
            $table->timestamps();
            $table->string('nombre');
            $table->string('descripcion');
            // TODO: revisar las clases Rubros y Categorias para definir en que clase van los atributos depreciar y actualiza
            $table->unsignedBigInteger('depreciar');
            $table->unsignedBigInteger('actualiza');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rubros');
    }
}
