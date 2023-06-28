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
        Schema::create('cad_consulta_imagem', function (Blueprint $table) {
            $table->id('id_arquivo');
            $table->string('nome_arquivo', 150);
            $table->string('path')->nullable();
            $table->string('observacao')->nullable();
            $table->foreignId('id_consulta')->references('id_consulta')->on('cad_consulta')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->index(['id_arquivo', 'nome_arquivo', 'id_consulta']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_consulta_imagem');
    }
};
