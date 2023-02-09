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
        Schema::create('tbl_venta_detalle', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_venta_detalle', true);
            $table->integer('cod_venta')->index('detalle_venta-ventas_idx');
            $table->integer('cod_producto')->index('detalle_venta-producto_idx');
            $table->integer('cantidad');
            $table->string('tipo_pago', 255);
            $table->double('subtotal');
            $table->double('isv');
            $table->double('descuento');
            $table->double('total');
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
        Schema::dropIfExists('tbl_venta_detalle');
    }
};
