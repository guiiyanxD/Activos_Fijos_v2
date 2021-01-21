<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id('id_departamento');
            $table->string('nombre');
            $table->string('descripcion');
            $table->unsignedBigInteger('ubicacion_id');
            $table->unsignedBigInteger('user_id');
            $table->string('estado')->nullable(); // interrogado


            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('ubicacion_id')->references('id_ubicacion')->on('ubicaciones')->onDelete('cascade');
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
        Schema::dropIfExists('departamentos');
    }
}
