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
        Schema::create('tbl_ms_objetos', function (Blueprint $table) {
            $table->comment('');
            $table->integer('ID_OBJETOS', true);
            $table->string('OBJETO', 45);
            $table->string('DESCRIPCION', 45);
            $table->string('TIPO_OBJETO', 45);
            $table->string('CREADO_POR', 45);
            $table->dateTime('FECHA_CREACION');
            $table->string('MODIFICADO_POR', 45);
            $table->dateTime('FECHA_MODIFACION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ms_objetos');
    }
};
