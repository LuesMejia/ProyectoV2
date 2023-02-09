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
        Schema::create('tbl_inventario', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_inventario', true);
            $table->integer('cod_tipo_movimiento_invt')->index('inventario_tipo_move_idx');
            $table->integer('cod_producto')->index('inventario_producto_idx');
            $table->integer('cod_venta')->index('inventario_ventas_idx');
            $table->integer('cod_compra')->index('inventario_compras_idx');
            $table->integer('cantidad');
            $table->string('descripcion', 255)->nullable();
            $table->date('fecha');
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
        Schema::dropIfExists('tbl_inventario');
    }
};
