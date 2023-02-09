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
        Schema::create('tvl_ms_preguntas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_PREGUNTA', true);
            $table->string('PREGUNTA', 45)->nullable();
            $table->string('CREADO_POR', 45)->nullable();
            $table->dateTime('FECHA_CREACION')->nullable();
            $table->string('MODIFICADO_POR', 45)->nullable();
            $table->dateTime('FECHA_MODIFIACION')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tvl_ms_preguntas');
    }
};
