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
        Schema::create('evento', function (Blueprint $table) {
            $table->increments('id_evento');
            $table->string('nome_evento', 45);
            $table->text('descricao')->nullable();
            $table->text('premiacao')->nullable();
            $table->integer('total_participante');
            $table->enum('situacao', ['Em andamento', 'Finalizado', 'Esgotado'])->default('Em andamento');
            $table->text('imagem_arte')->nullable();
            $table->text('detalhe_entrega_kit')->nullable();
            $table->integer('fk_idmodalidade');
        });
        DB::statement("ALTER TABLE evento ADD data_hora dm_data_evento");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evento');
    }
};
