<?php

namespace MVC\Models\CadPodologo;

use MVC\Base\MVCRequest;

class CadPodologoRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'uuid'             => '',
            'nome_podologo'    => 'required',
            'id_clinica'       => 'required',
            'ativo'            => 'required',
            'email'            => ['required', 'email'],
            'telefone_interno' => '',
            'created_at'       => '',
            'updated_at'       => '',
        ];
    }

    public function messages()
    {
        return [
            'nome_podologo.required' => 'O campo Nome é obrigatório.',
            'id_clinica.required'    => 'O campo Clínica é obrigatório.',
            'ativo.required'         => 'O campo Ativo é obrigatório.',
            'email.required'         => 'O campo E-mail é obrigatório.',
            'email.email'            => 'O campo E-mail está em um formato inválido.',
        ];
    }
}
