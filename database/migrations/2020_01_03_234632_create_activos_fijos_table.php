<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivosFijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activos_fijos', function (Blueprint $table) {
            $table->id('id_AF');
            $table->string('nombre');
            $table->dateTime('fecha_obtencion');
            $table->unsignedInteger('valor_compra');
            $table->unsignedBigInteger('estado_id');
            $table->unsignedBigInteger('categoria_id');
            $table->unsignedBigInteger('departamento_id');
            $table->unsignedBigInteger('solicitud_id');
            $table->unsignedBigInteger('almacen_id');
            $table->unsignedBigInteger('movimiento_id');
            $table->timestamps();

            $table->foreign('movimiento_id')->references('id_movimiento')->on('movimientos')->onDelete('cascade');
            $table->foreign('almacen_id')->references('id_almacen')->on('almacenes')->onDelete('cascade');
            $table->foreign('solicitud_id')->references('id_solicitud')->on('solicitudes')->onDelete('cascade');
            $table->foreign('departamento_id')->references('id_departamento')->on('departamentos')->onDelete('cascade');
            $table->foreign('categoria_id')->references('id_categoria')->on('categorias')->onDelete('cascade');
            $table->foreign('estado_id')->references('id_estado')->on('estados')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activos_fijos');

    }
}
