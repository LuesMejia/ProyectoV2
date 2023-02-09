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
        Schema::table('tbl_ms_permiso', function (Blueprint $table) {
            $table->foreign(['ID_OBJETO'], 'FK_OBJETOS_PERMISO')->references(['ID_OBJETOS'])->on('tbl_ms_objetos');
            $table->foreign(['ID_ROL'], 'FK_ROL_PERMISO')->references(['ID_ROLES'])->on('tbl_ms_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ms_permiso', function (Blueprint $table) {
            $table->dropForeign('FK_OBJETOS_PERMISO');
            $table->dropForeign('FK_ROL_PERMISO');
        });
    }
};
