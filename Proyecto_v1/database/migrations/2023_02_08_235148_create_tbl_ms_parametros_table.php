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
        Schema::create('tbl_ms_parametros', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_PARAMETRO', true);
            $table->string('PARAMETRO', 45);
            $table->string('VALOR', 45);
            $table->integer('ID_USUARIO')->index('FK_PARAMETROS_USER_idx');
            $table->dateTime('FECHA_CREACION');
            $table->dateTime('FECHA_MODIFICACION');
            $table->string('TBL_MS_PARAMETROScol', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ms_parametros');
    }
};
