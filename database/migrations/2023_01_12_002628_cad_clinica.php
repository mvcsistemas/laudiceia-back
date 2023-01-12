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
            $table->string('nome_clinica');
            $table->string('endereco');
            $table->string('cep');
            $table->string('numero');
            $table->string('cidade');
            $table->string('estado');
            $table->string('complemento');
            $table->timestamps();
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
