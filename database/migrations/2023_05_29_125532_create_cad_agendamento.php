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
        Schema::create('cad_agendamento', function (Blueprint $table) {
            $table->id('id_agendamento');
            $table->uuid('uuid');
            $table->string('agenda_ou_bloqueia', 1)->nullable();
            $table->date('data_agendamento')->nullable();
            $table->time('hora_inicio')->nullable();
            $table->time('hora_fim')->nullable();
            $table->string('telefone', 15);
            $table->string('celular', 15);
            $table->string('observacao');
            $table->foreignId('id_paciente')->references('id_paciente')->on('cad_paciente')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->index(['id_agendamento', 'uuid', 'data_agendamento', 'id_paciente']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_agendamento');
    }
};
