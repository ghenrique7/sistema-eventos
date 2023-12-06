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
        Schema::table('participante_evento', function (Blueprint $table) {
            $table->foreign(['fk_idusuario'], 'participante_evento_fk_idusuario_fkey')->references(['id_usuario'])->on('usuario')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['fk_idevento'], 'participante_evento_fk_idevento_fkey')->references(['id_evento'])->on('evento')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participante_evento', function (Blueprint $table) {
            $table->dropForeign('participante_evento_fk_idusuario_fkey');
            $table->dropForeign('participante_evento_fk_idevento_fkey');
        });
    }
};
