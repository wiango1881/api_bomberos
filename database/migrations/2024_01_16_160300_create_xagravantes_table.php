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
        Schema::create('xagravantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inspeccion_id')->constrained();
            $table->tinyInteger('nro_empleados')->nullable();
            $table->tinyInteger('tipo_empleados')->nullable();
            $table->tinyInteger('cumplimiento_ant')->nullable();
            $table->tinyInteger('emergencia_anterior')->nullable();
            $table->tinyInteger('reporte_riesgo')->nullable();
            $table->string('tipos_emergencia')->nullable();
            $table->tinyInteger('actividad_detenida')->nullable();
            $table->tinyInteger('funcionaron_equipos')->nullable();
            $table->tinyInteger('edificacion_nueva')->nullable();
            $table->tinyInteger('aplica_nsr')->nullable();
            $table->tinyInteger('modificada')->nullable();
            $table->tinyInteger('licencia_contruccion')->nullable();
            $table->tinyInteger('tipo_construccion')->nullable();
            $table->tinyInteger('propagacion_v')->nullable();
            $table->tinyInteger('propagacion_h')->nullable();
            $table->tinyInteger('uso_suelo')->nullable();
            $table->tinyInteger('altura')->nullable();
            $table->tinyInteger('area')->nullable();
            $table->tinyInteger('otra_actividad')->nullable();
            $table->tinyInteger('total_ocupantes')->nullable();
            $table->tinyInteger('ocupante_descarga')->nullable();
            $table->tinyInteger('altura_almacenamiento')->nullable();
            $table->tinyInteger('electricas')->nullable();
            $table->tinyInteger('roces')->nullable();
            $table->tinyInteger('chispas')->nullable();
            $table->tinyInteger('fumadores')->nullable();
            $table->tinyInteger('expontanea')->nullable();
            $table->tinyInteger('calientes')->nullable();
            $table->tinyInteger('brazas')->nullable();
            $table->tinyInteger('llama_abierta')->nullable();
            $table->tinyInteger('soldadura')->nullable();
            $table->tinyInteger('recalentamiento')->nullable();
            $table->tinyInteger('estatica')->nullable();
            $table->tinyInteger('hornos')->nullable();
            $table->tinyInteger('mecheros')->nullable();
            $table->tinyInteger('quimicos')->nullable();
            $table->tinyInteger('riesgo_activacion')->nullable();
            $table->tinyInteger('inflamabilidad')->nullable();
            $table->tinyInteger('electrico_deteriorado')->nullable();
            $table->tinyInteger('electrico_bueno')->nullable();
            $table->tinyInteger('uso_adecuado')->nullable();
            $table->tinyInteger('proteccion_sobrecarga')->nullable();
            $table->tinyInteger('revisado')->nullable();

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
        Schema::dropIfExists('xagravantes');
    }
};
