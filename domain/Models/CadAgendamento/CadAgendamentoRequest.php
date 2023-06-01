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
            'agenda_ou_bloqueia' => '',
            'data_agendamento'   => '',
            'hora_inicio'        => '',
            'hora_fim'           => '',
            'telefone'           => 'required',
            'celular'            => 'required',
            'observacao'         => 'required',
            'id_paciente'        => 'required',
            'created_at'         => '',
            'updated_at'         => '',
        ];
    }

    public function messages()
    {
        return [
            'telefone.required'    => 'O campo Telefone é obrigatório.',
            'celular.required'     => 'O campo Celular é obrigatório.',
            'observacao.required'  => 'O campo Observação é obrigatório.',
            'id_paciente.required' => 'O campo Paciente é obrigatório.',
        ];
    }
}
