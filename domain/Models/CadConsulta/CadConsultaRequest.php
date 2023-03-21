<?php

namespace MVC\Models\CadConsulta;

use MVC\Base\MVCRequest;

class CadConsultaRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'id_departamento' => '',
            'uuid' => '',
            'dsc_departamento' => 'required',
            'created_at' => '',
            'updated_at' => '',
        ];
    }

    public function messages()
    {
        return [
            'dsc_departamento.required' => 'O campo Departamento é obrigatório.'
        ];
    }
}
