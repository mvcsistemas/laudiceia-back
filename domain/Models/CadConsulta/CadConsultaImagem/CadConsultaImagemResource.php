<?php

namespace MVC\Models\CadConsulta\CadConsultaImagem;

use Illuminate\Http\Resources\Json\JsonResource;

class CadConsultaImagemResource extends JsonResource {

    public function toArray($request)
    {
        $retorno = [
            'id_arquivo' => $this->id_arquivo,
            'obervacao'  => $this->obervacao,
            'id_user'    => $this->id_user,
            'created_at' => $this->created_at
        ];

        return $retorno;
    }
}
