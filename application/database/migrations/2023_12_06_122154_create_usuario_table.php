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
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->string('nome_usuario', 45);
            $table->string('cpf', 11)->unique('usuario_cpf_key');
            $table->string('email', 45)->unique('usuario_email_key');
            $table->enum('sexo', ['Masculino', 'Feminino']);
            $table->string('cep', 15);
            $table->string('bairro', 30);
            $table->string('cidade', 30);
            $table->char('estado', 2);
            $table->string('numero', 10);
            $table->enum('tipo_usuario', ['Participante', 'Administrador']);
            $table->string('senha');
        });
        DB::statement("ALTER TABLE usuario ADD data_nascimento dm_data_nascimento");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
};
