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
            $table->bigInteger('id_arquivo');
            $table->foreignId('id_consulta')->references('id_consulta')->on('cad_consulta')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            // $table->index(['id_arquivo', 'id_consulta']);
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
