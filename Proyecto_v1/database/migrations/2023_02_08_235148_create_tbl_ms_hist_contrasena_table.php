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
        Schema::create('tbl_ms_hist_contrasena', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_HIST', true);
            $table->integer('ID_USUARIO')->index('FK_CONTRA_USER_idx');
            $table->string('CONTRASENA', 45);
            $table->string('CREADO_POR', 45);
            $table->dateTime('FEHCA_CREACION')->nullable();
            $table->string('MODIFICADO_POR', 45);
            $table->dateTime('FECHA_MODFICACION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ms_hist_contrasena');
    }
};
