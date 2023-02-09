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
        Schema::create('tbl_compras', function (Blueprint $table) {
            $table->comment('');
            $table->integer('cod_compra', true);
            $table->integer('cod_proveedor')->index('compras-personas_idx');
            $table->date('fecha');
            $table->string('descripcion', 255);
            $table->double('subtotal');
            $table->double('impuesto');
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
        Schema::dropIfExists('tbl_compras');
    }
};
