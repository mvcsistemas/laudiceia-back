<?php

namespace MVC\Models\CadAgendamento;

use Illuminate\Http\Resources\Json\JsonResource;

class CadAgendamentoResource extends JsonResource {

    public function toArray($request)
    {
        $retorno = [
            'id_agendamento'     => $this->id_agendamento,
            'uuid'               => $this->uuid,
            'agenda_ou_bloqueia' => $this->agenda_ou_bloqueia,
            'data_agendamento'   => setDataFormatoBr($this->data_agendamento),
            'hora_inicio'        => $this->hora_inicio,
            'hora_fim'           => $this->hora_fim,
            'telefone'           => $this->telefone,
            'celular'            => $this->celular,
            'observacao'         => $this->observacao,
            'id_paciente'        => $this->id_paciente,
            'created_at'         => $this->created_at,
            'updated_at'         => $this->updated_at,
        ];

        return $retorno;
    }
}
