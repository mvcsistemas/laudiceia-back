<?php

namespace MVC\Models\CadConsulta;

use MVC\Base\MVCRequest;

class CadConsultaRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'id_consulta'   => '',
            'uuid'          => '',
            'data_consulta' => 'required',
            'procedimento'  => 'required',
            'valor'         => 'required',
            'id_paciente'   => 'required',
            'id_medico'     => 'required',
            'created_at'    => '',
            'updated_at'    => '',
        ];
    }

    public function messages()
    {
        return [
            'dsc_departamento.required' => 'O campo Departamento é obrigatório.'
        ];
    }
}
