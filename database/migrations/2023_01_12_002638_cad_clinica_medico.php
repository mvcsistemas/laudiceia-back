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
        Schema::create('cad_clinica_podologo', function (Blueprint $table) {
            $table->id('id_clinica_podologo');
            $table->uuid('uuid');
            $table->foreignId('id_clinica')->references('id_clinica')->on('cad_clinica')->onDelete('cascade');
            $table->foreignId('id_podologo')->references('id_podologo')->on('cad_podologo')->onDelete('cascade');
            $table->string('telefone', 15);
            $table->string('whatsapp', 15);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->index(['id_clinica_podologo', 'uuid', 'id_clinica', 'id_podologo'], 'cad_clinica_podologo_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_clinica_podologo');
    }
};
