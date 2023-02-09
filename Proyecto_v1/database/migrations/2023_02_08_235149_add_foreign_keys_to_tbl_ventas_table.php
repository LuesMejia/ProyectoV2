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
        Schema::table('tbl_ventas', function (Blueprint $table) {
            $table->foreign(['cod_persona'], 'ventas_personas')->references(['cod_persona'])->on('tbl_persona');
            $table->foreign(['cod_tipo_movimiento'], 'ventas_tipo_mov')->references(['cod_tipo_movimiento'])->on('tbl_tipo_movimiento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ventas', function (Blueprint $table) {
            $table->dropForeign('ventas_personas');
            $table->dropForeign('ventas_tipo_mov');
        });
    }
};
