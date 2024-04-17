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
        Schema::create('humanas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inspeccion_id')->constrained();
            $table->tinyInteger('egreso')->nullable();
            $table->tinyInteger('visibles')->nullable();
            $table->tinyInteger('despejados')->nullable();
            $table->tinyInteger('iluminados')->nullable();
            $table->tinyInteger('evacuacion_dis')->nullable();
            $table->tinyInteger('aforo')->nullable();
            $table->tinyInteger('aforo_calculado')->nullable();
            $table->tinyInteger('descarga_aforo')->nullable();
            $table->tinyInteger('medios_garantizan')->nullable();
            $table->tinyInteger('ancho_salidas')->nullable();
            $table->tinyInteger('requerido_salidas')->nullable();
            $table->tinyInteger('ancho_puertas')->nullable();
            $table->tinyInteger('requerido_puertas')->nullable();
            $table->tinyInteger('ancho_escaleras')->nullable();
            $table->tinyInteger('requerido_escaleras')->nullable();
            $table->tinyInteger('ancho_rampas')->nullable();
            $table->tinyInteger('requerido_rampas')->nullable();
            $table->tinyInteger('ancho_todas_salidas')->nullable();
            $table->tinyInteger('requerido_todas')->nullable();
            $table->tinyInteger('ancho_puerta_salida')->nullable();
            $table->tinyInteger('requerido_salida_puerta')->nullable();
            $table->tinyInteger('cantidad_descargas')->nullable();
            $table->tinyInteger('descarga_exterior')->nullable();
            $table->tinyInteger('puertas_cortafuego')->nullable();
            $table->tinyInteger('puerta_cierre')->nullable();
            $table->tinyInteger('escaleras_exteriores')->nullable();
            $table->tinyInteger('luces_emergencias')->nullable();
            $table->tinyInteger('auto_ensayo')->nullable();
            $table->tinyInteger('requerido_iluminacion')->nullable();
            $table->tinyInteger('procedimiento_inspeccion')->nullable();
            $table->tinyInteger('realizado_prueba')->nullable();
            $table->tinyInteger('vigilancia')->nullable();
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
        Schema::dropIfExists('humanas');
    }
};
