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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_nit', 20)->nullable();
            $table->string('nit', 20)->nullable();
            $table->string('razon')->nullable();
            $table->string('tipo_persona', 60)->nullable();
            $table->text('actividad')->nullable();
            $table->string('camara', 60)->nullable();
            $table->string('sector', 60)->nullable();
            $table->string('representante', 100)->nullable();
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
        Schema::dropIfExists('empresas');
    }
};
