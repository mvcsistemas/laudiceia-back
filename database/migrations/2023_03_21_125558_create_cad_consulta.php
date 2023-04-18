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
        Schema::create('cad_consulta', function (Blueprint $table) {
            $table->id('id_consulta');
            $table->uuid('uuid');
            $table->date('data_consulta');
            $table->text('procedimento');
            $table->decimal('valor', 13, 2);
            $table->foreignId('id_paciente')->references('id_paciente')->on('cad_paciente');
            $table->foreignId('id_medico')->references('id_medico')->on('cad_medico');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
            // $table->index(['id_consulta', 'uuid', 'data_consulta', 'valor', 'id_paciente', 'id_medico']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cad_consulta');
    }
};
