<?php

namespace MVC\Models\CadMedico;

use MVC\Base\MVCRequest;

class CadMedicoRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'id_medico' => '',
            'uuid' => '',
            'nome_medico' => 'required',
            'id_clinica' => 'required',
            'ativo' => 'required',
            'email' => ['required', 'email'],
            'telefone_interno' => '',
            'created_at' => '',
            
            'updated_at' => '',
        ];
    }

    public function messages()
    {
        return [
            'nome_medico.required' => 'O campo Nome é obrigatório.',
            'id_clinica.required' => 'O campo Clínica é obrigatório.',
            'ativo.required' => 'O campo Ativo é obrigatório.',
            'email.required' => 'O campo E-mail é obrigatório.',
            'email.email' => 'O campo E-mail está em um formato inválido.',
        ];
    }
}
