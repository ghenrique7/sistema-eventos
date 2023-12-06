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
        Schema::table('evento_kit', function (Blueprint $table) {
            $table->foreign(['fk_idkit'], 'evento_kit_fk_idkit_fkey')->references(['id_kit'])->on('kit')->onUpdate('CASCADE')->onDelete('SET NULL');
            $table->foreign(['fk_idevento'], 'evento_kit_fk_idevento_fkey')->references(['id_evento'])->on('evento')->onUpdate('CASCADE')->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('evento_kit', function (Blueprint $table) {
            $table->dropForeign('evento_kit_fk_idkit_fkey');
            $table->dropForeign('evento_kit_fk_idevento_fkey');
        });
    }
};
