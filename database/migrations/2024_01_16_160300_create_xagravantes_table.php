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
            $table->integer('nro_empleados')->nullable();
            $table->integer('tipo_empleados')->nullable();
            $table->integer('cumplimiento_ant')->nullable();
            $table->integer('emergencia_anterior')->nullable();
            $table->integer('reporte_riesgo')->nullable();
            $table->string('tipos_emergencia')->nullable();
            $table->integer('actividad_detenida')->nullable();
            $table->integer('funcionaron_equipos')->nullable();
            $table->integer('edificacion_nueva')->nullable();
            $table->integer('aplica_nsr')->nullable();
            $table->integer('modificada')->nullable();
            $table->integer('licencia_contruccion')->nullable();
            $table->integer('tipo_construccion')->nullable();
            $table->integer('propagacion_v')->nullable();
            $table->integer('propagacion_h')->nullable();
            $table->integer('uso_suelo')->nullable();
            $table->integer('altura')->nullable();
            $table->integer('area')->nullable();
            $table->integer('otra_actividad')->nullable();
            $table->integer('total_ocupantes')->nullable();
            $table->integer('ocupante_descarga')->nullable();
            $table->integer('altura_almacenamiento')->nullable();
            $table->integer('electricas')->nullable();
            $table->integer('roces')->nullable();
            $table->integer('chispas')->nullable();
            $table->integer('fumadores')->nullable();
            $table->integer('expontanea')->nullable();
            $table->integer('calientes')->nullable();
            $table->integer('brazas')->nullable();
            $table->integer('llama_abierta')->nullable();
            $table->integer('soldadura')->nullable();
            $table->integer('recalentamiento')->nullable();
            $table->integer('estatica')->nullable();
            $table->integer('hornos')->nullable();
            $table->integer('mecheros')->nullable();
            $table->integer('quimicos')->nullable();
            $table->integer('riesgo_activacion')->nullable();
            $table->integer('inflamabilidad')->nullable();
            $table->integer('electrico_deteriorado')->nullable();
            $table->integer('electrico_bueno')->nullable();
            $table->integer('uso_adecuado')->nullable();
            $table->integer('proteccion_sobrecarga')->nullable();
            $table->integer('revisado')->nullable();

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
