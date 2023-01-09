<?php

namespace MVC\Models\Example;

use MVC\Base\MVCRequest;

class ExampleRequest extends MVCRequest {

    public function rules()
    {
        return [
            'name'     => 'required',
            'email'    => 'required',
            'password' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'     => 'O campo Nome é um campo obrigatório.',
            'email.required'    => 'O campo Email é um campo obrigatório.',
            'password.required' => 'O campo Senha é um campo obrigatório.',
        ];
    }
}
