<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planemergencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inspeccion_id')->constrained();
            $table->integer('plan_emergencia')->nullable();
            $table->integer('riesgo_incendio')->nullable();
            $table->integer('riesgo_fugas')->nullable();
            $table->integer('riesgo_derrames')->nullable();
            $table->integer('riesgo_explosiones')->nullable();
            $table->integer('riesgo_bleves')->nullable();
            $table->integer('soc_empleados')->nullable();
            $table->integer('soc_bomberos')->nullable();
            $table->integer('soc_comunidad')->nullable();
            $table->integer('soc_socorro')->nullable();
            $table->integer('soc_brigada')->nullable();
            $table->integer('simulacros')->nullable();
            $table->integer('brigada')->nullable();
            $table->integer('integrantes')->nullable();
            $table->integer('brigada_certificada')->nullable();
            $table->integer('clase_brigada')->nullable();
            $table->integer('requerido_clase')->nullable();
            $table->integer('certificada_bros')->nullable();
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
        Schema::dropIfExists('planemergencias');
    }
};
