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
        Schema::create('cad_ficha_anamnese', function (Blueprint $table) {
            $table->id('id_ficha');
            $table->string('meia', 255);
            $table->string('calcado', 255);
            $table->string('num_calcado');
            $table->string('cirurgia_membro_inferior', 255);
            $table->string('hipertensao', 255);
            $table->string('esporte', 255);
            $table->string('hepatite', 255);
            $table->string('medicamento', 255);
            $table->string('hiv', 255);
            $table->string('alergia', 255);
            $table->string('psoriase', 255);
            $table->string('dermatite', 255);
            $table->string('hanseniase', 255);
            $table->string('acido_urico', 255);
            $table->string('tempo', 255);
            $table->string('diabetes', 255);
            $table->string('tireoide', 255);
            $table->string('circulatorio', 255);
            $table->string('antecedentes', 255);
            $table->string('sensibilidade', 255);
            $table->string('perfusao_pd', 255);
            $table->string('perfusao_pe', 255);
            $table->string('digito_pressao_pd', 255);
            $table->string('digito_pressao_pe', 255);
            $table->string('monofilamento_pd', 255);
            $table->string('monofilamento_pe', 255);
            $table->string('pat_dermatologicas_pd', 255);
            $table->string('pat_dermatologicas_pe', 255);
            $table->string('pat_ungueais_pd', 255);
            $table->string('pat_ungueais_pe', 255);
            $table->string('observacoes', 255);
            $table->foreignId('id_paciente')->references('id_paciente')->on('cad_paciente');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->index(['id_ficha', 'id_paciente']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_ficha_anamnese');
    }
};
