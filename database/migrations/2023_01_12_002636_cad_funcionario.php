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
        Schema::create('cad_funcionario', function (Blueprint $table) {
            $table->id('id_funcionario');
            $table->uuid('uuid');
            $table->string('nome_funcionario');
            $table->string('email')->unique();
            $table->string('telefone', 15);
            $table->string('cpf', 15);
            $table->string('endereco');
            $table->string('bairro', 200);
            $table->string('cep', 10);
            $table->string('numero', 10);
            $table->string('cidade', 50);
            $table->string('estado', 50);
            $table->string('complemento', 200)->nullable();
            $table->boolean('acesso_sistema')->default(true);
            $table->boolean('ativo')->default(true);
            $table->foreignId('id_departamento')->references('id_departamento')->on('cad_departamento');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            // $table->index(['id_funcionario', 'uuid', 'nome_funcionario', 'cpf', 'cep', 'cidade', 'estado', 'acesso_sistema', 'ativo', 'id_departamento']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_funcionario');
    }
};
