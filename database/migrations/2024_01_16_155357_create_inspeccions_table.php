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
        Schema::create('inspeccions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sucursal_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->bigInteger('numero');
            $table->string('radicado', 60)->nullable();
            $table->date('fecha')->nullable();
            $table->string('cla_nsr', 20)->nullable();
            $table->string('cla_riesgo', 60)->nullable();
            $table->string('incendios', 10)->nullable();
            $table->string('recomend_incendios', 10)->nullable();
            $table->text('descripcion')->nullable();
            $table->text('antecedentes_emerg')->nullable();
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
        Schema::dropIfExists('inspeccions');
    }
};
