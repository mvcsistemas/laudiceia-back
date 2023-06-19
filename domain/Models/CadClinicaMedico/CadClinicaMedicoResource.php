<?php

namespace MVC\Models\CadClinicaPodologo;

use Illuminate\Http\Resources\Json\JsonResource;

class CadClinicaPodologoResource extends JsonResource
{

    public function toArray($request)
    {
        $retorno = [
            'id_clinica_podologo' => $this->id_clinica_podologo,
            'uuid'                => $this->uuid,
            'id_clinica'          => $this->id_clinica,
            'id_podologo'         => $this->id_podologo,
            'telefone'            => $this->telefone,
            'whatsapp'            => $this->whatsapp,
            'created_at'          => $this->created_at,
            'updated_at'          => $this->updated_at,
        ];

        return $retorno;
    }
}
