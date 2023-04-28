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
        Schema::create('cad_paciente', function (Blueprint $table) {
            $table->id('id_paciente');
            $table->uuid('uuid');
            $table->string('nome_paciente');
            $table->string('email')->nullable();
            $table->string('sexo', 20);
            $table->string('cpf', 15);
            $table->string('telefone', 15)->nullable();
            $table->string('celular', 15)->nullable();
            $table->string('cidade', 50);
            $table->string('estado', 50);
            $table->date('data_nascimento');
            $table->string('estado_civil');
            $table->string('profissao');
            $table->string('endereco');
            $table->string('bairro', 200);
            $table->string('cep', 10)->nullable();
            $table->string('numero', 10);
            $table->string('complemento', 200)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->index(['id_paciente', 'uuid', 'nome_paciente', 'email', 'cpf', 'cidade', 'estado', 'telefone', 'celular'], 'cad_paciente_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_paciente');
    }
};
