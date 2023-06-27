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
        Schema::create('cad_podologo', function (Blueprint $table) {
            $table->id('id_podologo');
            $table->uuid('uuid');
            $table->string('nome_podologo');
            $table->string('email')->unique();
            $table->boolean('acesso_sistema')->default(true);
            $table->boolean('ativo')->default(true);
            $table->string('telefone_interno',15)->nullable();
            $table->foreignId('id_clinica')->references('id_clinica')->on('cad_clinica')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->index(['id_podologo', 'uuid', 'nome_podologo', 'email', 'acesso_sistema', 'ativo', 'id_clinica'], 'cad_podologo_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_podologo');
    }
};
