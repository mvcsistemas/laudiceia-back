<?php

namespace MVC\Models\CadDepartamento;

use MVC\Base\MVCRequest;

class CadDepartamentoRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'uuid'             => '',
            'dsc_departamento' => 'required',
            'created_at'       => '',
            'updated_at'       => '',
        ];
    }

    public function messages()
    {
        return [
            'dsc_departamento.required' => 'O campo Departamento é obrigatório.'
        ];
    }
}
