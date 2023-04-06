<?php

namespace CRM\Models\UsersImage;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersImageResource extends JsonResource {

    public function toArray($request)
    {
        $retorno = [
            'id_arquivo' => $this->id_arquivo,
            'id_user'    => $this->id_user
        ];

        return $retorno;
    }
}
