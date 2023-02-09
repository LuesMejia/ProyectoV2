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
        Schema::table('tbl_direccion', function (Blueprint $table) {
            $table->foreign(['cod_tipo_direccion'], 'direccion-tipo_direccion')->references(['cod_tipo_direccion'])->on('tbl_tipo_direccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_direccion', function (Blueprint $table) {
            $table->dropForeign('direccion-tipo_direccion');
        });
    }
};
