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
        Schema::create('sucursals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('empresa_id')->constrained();
            $table->string('nom_comercial')->nullable();
            $table->string('telefono_sucursal', 60)->nullable();
            $table->string('ciiu', 60)->nullable();
            $table->string('direccion')->nullable();
            $table->string('dto', 60)->nullable();
            $table->string('ciudad', 60)->nullable();
            $table->string('mpio', 60)->nullable();
            $table->string('barrio', 100)->nullable();
            $table->string('comuna', 60)->nullable();
            $table->string('zona', 20)->nullable();
            $table->string('encargado', 60)->nullable();
            $table->string('cargo', 60)->nullable();
            $table->string('telefono_encargado', 60)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('cla_nsr', 20)->nullable();
            $table->string('cla_riesgo', 60)->nullable();
            $table->timestamps();

            //$table->foreign('empresa_id')->references('id')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sucursals');
    }
};
