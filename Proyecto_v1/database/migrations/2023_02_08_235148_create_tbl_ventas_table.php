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
        Schema::create('tbl_ventas', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_venta', true);
            $table->integer('cod_persona')->index('ventas_personas_idx');
            $table->integer('cod_tipo_movimiento')->index('ventas_tipo_mov_idx');
            $table->string('descripcion', 255);
            $table->double('subtotal');
            $table->double('isv');
            $table->double('descuento');
            $table->double('total');
            $table->string('estado', 255);
            $table->string('tipo_pago', 255);
            $table->integer('num_comprobante')->nullable();
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
        Schema::dropIfExists('tbl_ventas');
    }
};
