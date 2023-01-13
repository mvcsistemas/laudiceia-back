<?php

namespace MVC\Models\CadClinicaMedico;

use Illuminate\Http\Resources\Json\JsonResource;

class CadClinicaMedicoResource extends JsonResource {

    public function toArray($request)
    {
        $retorno = [
            'id'    => $this->id,
            'name'  => $this->name,
            'email' => $this->email,
        ];

        // Quando há a necessidade de um merge com um array no objeto.
        //        $retorno = array_merge($retorno, [
        //            'etapas' => CadClinicaMedicoItemResource::collection($this->etapas),
        //        ]);

        return $retorno;
    }
}
