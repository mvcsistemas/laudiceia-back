<?php

namespace MVC\Models\User;

use MVC\Base\MVCRequest;

class UserRequest extends MVCRequest {

    public function rules()
    {
        return [
            'name'     => 'required',
            'email'    => 'required',
            'password' => ''
        ];
    }

    public function messages()
    {
        return [
            'name.required'  => 'O campo Nome é um campo obrigatório.',
            'email.required' => 'O campo Email é um campo obrigatório.'
        ];
    }
}
