<?php

namespace MVC\Models\CadClinica;

use Illuminate\Http\Resources\Json\JsonResource;

class CadClinicaResource extends JsonResource {

    public function toArray($request)
    {
        $retorno = [
            'id'    => $this->id,
            'name'  => $this->name,
            'email' => $this->email,
        ];

        return $retorno;
    }
}
