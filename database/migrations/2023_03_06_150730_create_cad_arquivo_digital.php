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
        Schema::create('cad_arquivo_digital', function (Blueprint $table) {
            $table->id('id_arquivo');
            $table->binary('arq_conteudo');
            $table->timestamp('created_at')->useCurrent();
            $table->index(['id_arquivo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_arquivo_digital');
    }
};
