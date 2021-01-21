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
            $table->unsignedBigInteger('vida_util');
            $table->unsignedBigInteger('coeficiente');
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
