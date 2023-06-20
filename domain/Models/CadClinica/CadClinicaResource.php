<?php

namespace MVC\Models\CadClinica;

use Illuminate\Http\Resources\Json\JsonResource;

class CadClinicaResource extends JsonResource
{

    public function toArray($request)
    {
        $retorno = [
            'uuid'         => $this->uuid,
            'nome_clinica' => $this->nome_clinica,
            'cep'          => $this->cep,
            'cidade'       => $this->cidade,
            'complemento'  => $this->complemento,
            'endereco'     => $this->endereco,
            'bairro'       => $this->bairro,
            'numero'       => $this->numero,
            'estado'       => $this->estado,
            'created_at'   => $this->created_at,
            'updated_at'   => $this->updated_at,
        ];

        return $retorno;
    }
}
