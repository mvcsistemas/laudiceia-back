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
            $table->string('agenda_ou_bloqueia', 1);
            $table->date('data_agendamento');
            $table->time('hora_inicio');
            $table->time('hora_fim');
            $table->string('telefone', 15)->nullable();
            $table->string('celular', 15)->nullable();
            $table->string('observacao')->nullable();
            $table->integer('id_status')->default(0);
            $table->foreignId('id_paciente')->nullable()->references('id_paciente')->on('cad_paciente')->onDelete('cascade');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            $table->index(['id_agendamento', 'uuid', 'data_agendamento', 'id_paciente'], 'cad_agendamento_index');
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
