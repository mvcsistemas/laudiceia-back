<?php

namespace MVC\Models\CadDepartamento;

use Illuminate\Http\Resources\Json\JsonResource;

class CadDepartamentoResource extends JsonResource {

    public function toArray($request)
    {
        $retorno = [
            'id'    => $this->id,
            'name'  => $this->name,
            'email' => $this->email,
        ];

        // Quando há a necessidade de um merge com um array no objeto.
        //        $retorno = array_merge($retorno, [
        //            'etapas' => CadDepartamentoItemResource::collection($this->etapas),
        //        ]);

        return $retorno;
    }
}
