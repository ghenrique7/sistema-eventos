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
        Schema::table('telefone_usuario', function (Blueprint $table) {
            $table->foreign(['fk_idusuario'], 'telefone_usuario_fk_idusuario_fkey')->references(['id_usuario'])->on('usuario')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('telefone_usuario', function (Blueprint $table) {
            $table->dropForeign('telefone_usuario_fk_idusuario_fkey');
        });
    }
};
