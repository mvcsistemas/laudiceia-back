<?php

namespace MVC\Models\CadPodologo;

use Illuminate\Http\Resources\Json\JsonResource;

class CadPodologoResource extends JsonResource
{

    public function toArray($request)
    {
        $retorno = [
            'id_podologo'      => $this->id_podologo,
            'uuid'             => $this->uuid,
            'id_clinica'       => $this->id_clinica,
            'nome_podologo'    => $this->nome_podologo,
            'nome_clinica'     => $this->nome_clinica,
            'acesso_sistema'   => boolval($this->acesso_sistema),
            'ativo'            => boolval($this->ativo),
            'email'            => $this->email,
            'telefone_interno' => $this->telefone_interno,
            'created_at'       => $this->created_at,
            'updated_at'       => $this->updated_at,
        ];

        return $retorno;
    }
}
