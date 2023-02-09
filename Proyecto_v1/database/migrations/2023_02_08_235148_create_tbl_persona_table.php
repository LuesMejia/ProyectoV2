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
        Schema::create('tbl_persona', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_persona', true);
            $table->integer('cod_tipo_persona')->index('persona_tipo_persona_idx');
            $table->string('nombre', 255);
            $table->enum('genero', ['F', 'M']);
            $table->date('fecha_nacimiento');
            $table->integer('cod_tipo_relacion')->index('persona_tipo_relacion_idx');
            $table->integer('cod_tipo_identificacion')->index('persona_tipo_identificacion_idx');
            $table->string('tipo_identificacion', 255);
            $table->integer('cod_direccion')->index('persona_direccion_idx');
            $table->integer('cod_telefono')->index('persona_telefono_idx');
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
        Schema::dropIfExists('tbl_persona');
    }
};
