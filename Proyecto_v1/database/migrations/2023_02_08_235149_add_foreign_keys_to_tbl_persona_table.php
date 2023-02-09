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
        Schema::table('tbl_persona', function (Blueprint $table) {
            $table->foreign(['cod_direccion'], 'persona-direccion')->references(['cod_direccion'])->on('tbl_direccion');
            $table->foreign(['cod_telefono'], 'persona_telefono')->references(['cod_telefono'])->on('tbl_telefono');
            $table->foreign(['cod_tipo_relacion'], 'persona_tipo_relacion')->references(['cod_tipo_relacion'])->on('tbl_tipo_relacion');
            $table->foreign(['cod_tipo_persona'], 'persona-tipo_persona')->references(['cod_tipo_persona'])->on('tbl_tipo_persona');
            $table->foreign(['cod_tipo_identificacion'], 'persona_tipo_identificacion')->references(['cod_tipo_identificacion'])->on('tbl_tipo_identificacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_persona', function (Blueprint $table) {
            $table->dropForeign('persona-direccion');
            $table->dropForeign('persona_telefono');
            $table->dropForeign('persona_tipo_relacion');
            $table->dropForeign('persona-tipo_persona');
            $table->dropForeign('persona_tipo_identificacion');
        });
    }
};
