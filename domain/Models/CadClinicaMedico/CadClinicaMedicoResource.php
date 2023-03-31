<?php

namespace MVC\Models\CadClinicaMedico;

use Illuminate\Http\Resources\Json\JsonResource;

class CadClinicaMedicoResource extends JsonResource
{

    public function toArray($request)
    {
        $retorno = [
            'id_clinica_medico' => $this->id_clinica_medico,
            'uuid'              => $this->uuid,
            'id_clinica'        => $this->id_clinica,
            'id_medico'         => $this->id_medico,
            'telefone'          => $this->telefone,
            'whatsapp'          => $this->whatsapp,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
        ];

        return $retorno;
    }
}
