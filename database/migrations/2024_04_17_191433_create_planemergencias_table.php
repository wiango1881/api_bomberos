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
            $table->tinyInteger('plan_emergencia')->nullable();
            $table->tinyInteger('riesgo_incendio')->nullable();
            $table->tinyInteger('riesgo_fugas')->nullable();
            $table->tinyInteger('riesgo_derrames')->nullable();
            $table->tinyInteger('riesgo_explosiones')->nullable();
            $table->tinyInteger('riesgo_bleves')->nullable();
            $table->tinyInteger('soc_empleados')->nullable();
            $table->tinyInteger('soc_bomberos')->nullable();
            $table->tinyInteger('soc_comunidad')->nullable();
            $table->tinyInteger('soc_socorro')->nullable();
            $table->tinyInteger('soc_brigada')->nullable();
            $table->tinyInteger('simulacros')->nullable();
            $table->tinyInteger('brigada')->nullable();
            $table->tinyInteger('integrantes')->nullable();
            $table->tinyInteger('brigada_certificada')->nullable();
            $table->tinyInteger('clase_brigada')->nullable();
            $table->tinyInteger('requerido_clase')->nullable();
            $table->tinyInteger('certificada_bros')->nullable();
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
