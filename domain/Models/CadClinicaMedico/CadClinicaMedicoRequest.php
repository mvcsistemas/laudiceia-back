<?php

namespace MVC\Models\CadClinicaMedico;

use MVC\Base\MVCRequest;

class CadClinicaMedicoRequest extends MVCRequest {

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
