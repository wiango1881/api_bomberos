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
            $table->integer('requiere_extintor')->nullable();
            $table->integer('cuenta_extintor')->nullable();
            $table->integer('extintores_apropiados')->nullable();
            $table->integer('distribuidos')->nullable();
            $table->integer('señalizados')->nullable();
            $table->integer('despejados')->nullable();
            $table->integer('instalados')->nullable();
            $table->integer('recargados')->nullable();
            $table->integer('buenos_extintores')->nullable();
            $table->integer('supervision')->nullable();
            $table->integer('aplica_seguridad_h')->nullable();
            $table->integer('aplica_planes')->nullable();
            $table->integer('seguro_vigente')->nullable();
            $table->integer('poliza_cubre')->nullable();
            $table->integer('compania_seguro')->nullable();

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
