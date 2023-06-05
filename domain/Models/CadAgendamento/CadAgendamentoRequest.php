<?php

namespace MVC\Models\CadAgendamento;

use MVC\Base\MVCRequest;

class CadAgendamentoRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'id_agendamento'     => '',
            'uuid'               => '',
            'agenda_ou_bloqueia' => 'required',
            'data_agendamento'   => 'required',
            'hora_inicio'        => 'required',
            'hora_fim'           => 'required', //TODO: tem que ser maior que a hora_inicio
            'telefone'           => '',
            'celular'            => '',
            'observacao'         => '',
            'id_paciente'        => '', //TODO: fazer if tipo agendamento == A = required
            'created_at'         => '',
            'updated_at'         => '',
        ];
    }

    public function messages()
    {
        return [
            'agenda_ou_bloqueia.required' => 'O campo Agenda é obrigatório.',
            'data_agendamento.required'   => 'O campo Data é obrigatório.',
            'hora_inicio.required'        => 'O campo Início é obrigatório.',
            'hora_fim.required'           => 'O campo Fim é obrigatório.',
        ];
    }
}
