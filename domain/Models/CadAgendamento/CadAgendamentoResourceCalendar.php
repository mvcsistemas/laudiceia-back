<?php

namespace MVC\Models\CadAgendamento;

use Illuminate\Http\Resources\Json\JsonResource;

class CadAgendamentoResourceCalendar extends JsonResource {

    public function toArray($request)
    {
        $retorno = [
            'uuid'  => $this->uuid,
            'start' => $this->data_agendamento . ' ' . $this->hora_inicio,
            'end'   => $this->data_agendamento . ' ' . $this->hora_fim,
            'title' => $this->nome_paciente,
            'class' => $this->agenda_ou_bloqueia == 'A' ? 'primary_vuecal' : ''
        ];

        return $retorno;
    }
}
