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
        Schema::create('yagravantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('inspeccion_id')->constrained();
            $table->tinyInteger('requiere_extintor')->nullable();
            $table->tinyInteger('cuenta_extintor')->nullable();
            $table->tinyInteger('extintores_apropiados')->nullable();
            $table->tinyInteger('distribuidos')->nullable();
            $table->tinyInteger('señalizados')->nullable();
            $table->tinyInteger('despejados')->nullable();
            $table->tinyInteger('instalados')->nullable();
            $table->tinyInteger('recargados')->nullable();
            $table->tinyInteger('buenos_extintores')->nullable();
            $table->tinyInteger('supervision')->nullable();
            $table->tinyInteger('aplica_seguridad_h')->nullable();
            $table->tinyInteger('aplica_planes')->nullable();
            $table->tinyInteger('seguro_vigente')->nullable();
            $table->tinyInteger('poliza_cubre')->nullable();
            $table->tinyInteger('compania_seguro')->nullable();

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
        Schema::dropIfExists('yagravantes');
    }
};
