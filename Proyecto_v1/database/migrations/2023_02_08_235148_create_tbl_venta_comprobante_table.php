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
        Schema::create('tbl_venta_comprobante', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_venta_comprobante', true);
            $table->integer('cod_venta')->index('comprobante_venta-ventas_idx');
            $table->double('total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_venta_comprobante');
    }
};
