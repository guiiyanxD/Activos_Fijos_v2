<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_movimientos', function (Blueprint $table) {
            $table->id('id_sol_mov'); //NroMovimiento
            $table->unsignedBigInteger('solicitud_id'); //departamento->id_departamento
            $table->unsignedBigInteger('destino_dpto'); //departamento->id_departamento
            $table->unsignedBigInteger('origen_dpto'); //activofijo->departamento_id
            $table->unsignedBigInteger('af_id'); //activofijo
            $table->unsignedBigInteger('cantidad');

            $table->foreign('solicitud_id')->references('id_solicitud')->on('solicitudes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('destino_dpto')->references('id_departamento')->on('departamentos')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('af_id')->references('id_AF')->on('activos_fijos')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('solicitudes_movimientos');
    }
}
