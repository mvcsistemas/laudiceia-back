<?php

namespace MVC\Models\CadConsulta;

use MVC\Base\MVCRequest;

class CadConsultaRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'id_consulta'   => 'required',
            'data_consulta' => 'required',
            'procedimento'  => 'required',
            'valor'         => 'required',
            'id_paciente'   => 'required',
            'id_medico'     => 'required',
            'created_at'    => 'required',
            'updated_at'    => 'required',
        ];
    }

    public function messages()
    {
        return [
            'dsc_departamento.required' => 'O campo Departamento é obrigatório.'
        ];
    }
}
