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
        Schema::table('tbl_venta_comprobante', function (Blueprint $table) {
            $table->foreign(['cod_venta'], 'comprobante_venta-ventas')->references(['cod_venta'])->on('tbl_ventas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_venta_comprobante', function (Blueprint $table) {
            $table->dropForeign('comprobante_venta-ventas');
        });
    }
};
