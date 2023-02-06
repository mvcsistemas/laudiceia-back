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
        Schema::create('cad_medico', function (Blueprint $table) {
            $table->id('id_medico');
            $table->uuid('uuid');
            $table->string('nome_medico');
            $table->string('email')->unique();
            $table->boolean('acesso_sistema')->default(true);
            $table->boolean('ativo')->default(true);
            $table->string('codigo_ativacao', 10)->nullable();
            $table->string('telefone_interno',15)->nullable();
            $table->foreignId('id_clinica')->references('id_clinica')->on('cad_clinica');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_medico');
    }
};
