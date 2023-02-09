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
        Schema::create('tbl_ms_permiso', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_ROL', true)->index('FK_ROL_PERMISO_idx');
            $table->integer('ID_OBJETO')->index('FK_OBJETOS_PERMISO_idx');
            $table->string('PREMISO_INSERCCION', 45);
            $table->string('PERMISO_ELIMINACION', 45);
            $table->string('PERMISO_ACTUALIZACION', 45);
            $table->string('PERMISO_CONSULTAR', 45);
            $table->string('CREADO_POR', 45);
            $table->dateTime('FECHA_CREACION');
            $table->string('MODFICADO_POR', 45);
            $table->dateTime('FECHA_MODFIACION');
            $table->string('TBL_MS_PERMISOcol', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ms_permiso');
    }
};
