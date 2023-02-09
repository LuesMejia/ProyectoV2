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
        Schema::create('tbl_telefono', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_telefono', true);
            $table->integer('cod_tipo_telefono')->index('telefono-tipo_telefono_idx');
            $table->integer('telefono');
            $table->integer('extension');
            $table->integer('codigo_area');
            $table->string('CREADO_POR', 30);
            $table->dateTime('FECHA_CREACION');
            $table->string('MODIFICADO_POR', 45);
            $table->dateTime('FECHA_MODIFICACION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_telefono');
    }
};
