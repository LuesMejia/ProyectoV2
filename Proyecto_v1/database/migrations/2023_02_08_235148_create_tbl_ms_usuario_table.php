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
        Schema::create('tbl_ms_usuario', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_USUARIO', true);
            $table->string('PREGUNTA', 35);
            $table->integer('ID_ROL')->index('FK_idx');
            $table->string('NOMBRE_USARIO', 35);
            $table->string('ESTADO_USUARIO', 45);
            $table->string('CONTRASENA', 45);
            $table->dateTime('FECHA_ULTIMA_CONEXION');
            $table->string('PREGUNTA_CONTESTADA', 45);
            $table->string('PRIMER_INGRESO', 45);
            $table->dateTime('FECHA_VENCIMIENTO');
            $table->string('CORREO_ELECTRONICO', 45);
            $table->string('CREADO_POR', 45);
            $table->dateTime('FEHCA_CREACION');
            $table->string('MODIFICADO_POR', 45);
            $table->dateTime('FECHA_MODIFACION');

            $table->primary(['ID_USUARIO', 'PREGUNTA']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ms_usuario');
    }
};
