<?php

namespace MVC\Models\CadDepartamento;

use Illuminate\Http\Resources\Json\JsonResource;

class CadDepartamentoResource extends JsonResource {

    public function toArray($request)
    {
        $retorno = [
            'id_departamento'  => $this->id_departamento,
            'uuid'             => $this->uuid,
            'dsc_departamento' => $this->dsc_departamento,
            'created_at'       => $this->created_at,
            'updated_at'       => $this->updated_at,
        ];

        return $retorno;
    }
}
