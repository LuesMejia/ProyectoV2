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
        Schema::table('tbl_ms_parametros', function (Blueprint $table) {
            $table->foreign(['ID_USUARIO'], 'FK_PARAMETROS_USER')->references(['ID_USUARIO'])->on('tbl_ms_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ms_parametros', function (Blueprint $table) {
            $table->dropForeign('FK_PARAMETROS_USER');
        });
    }
};
