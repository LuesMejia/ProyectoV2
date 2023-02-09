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
        Schema::table('tbl_ms_usuario', function (Blueprint $table) {
            $table->foreign(['ID_ROL'], 'FK_ROLES_USUARIO')->references(['ID_ROLES'])->on('tbl_ms_roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tbl_ms_usuario', function (Blueprint $table) {
            $table->dropForeign('FK_ROLES_USUARIO');
        });
    }
};
