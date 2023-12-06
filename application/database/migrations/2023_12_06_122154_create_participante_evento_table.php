<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        Schema::create('participante_evento', function (Blueprint $table) {
            $table->integer('fk_idusuario');
            $table->integer('fk_idevento');
            $table->enum('situacao_inscricao', ['Inscrito', 'Pendente'])->default('Inscrito');
            $table->primary(['fk_idusuario', 'fk_idevento']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('participante_evento');
    }
};
