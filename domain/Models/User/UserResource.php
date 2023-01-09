<?php

namespace MVC\Models\User;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource {

    public function toArray($request)
    {
        $retorno = [
            'id'    => $this->id,
            'uuid'  => $this->uuid,
            'name'  => $this->name,
            'email' => $this->email,
        ];

        return $retorno;
    }
}
