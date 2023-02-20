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
        Schema::create('cad_clinica', function (Blueprint $table) {
            $table->id('id_clinica');
            $table->uuid('uuid');
            $table->string('nome_clinica', 200);
            $table->string('endereco');
            $table->string('cep', 10);
            $table->string('numero', 10);
            $table->string('bairro', 200);
            $table->string('cidade', 50);
            $table->string('estado', 50);
            $table->string('complemento', 200)->nullable();
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
        Schema::dropIfExists('cad_clinica');
    }
};
