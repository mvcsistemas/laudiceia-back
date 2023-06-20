<?php

namespace MVC\Models\CadClinica;

use MVC\Base\MVCRequest;

class CadClinicaRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'uuid'         => '',
            'nome_clinica' => 'required',
            'cep'          => 'required',
            'cidade'       => 'required',
            'complemento'  => '',
            'endereco'     => 'required',
            'bairro'       => 'required',
            'numero'       => 'required',
            'estado'       => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome_clinica.required' => 'O campo Nome da Clínica é obrigatório.',
            'cep.required'          => 'O campo CEP é obrigatório.',
            'cidade.required'       => 'O campo Cidade é obrigatório.',
            'endereco.required'     => 'O campo Endereço é obrigatório.',
            'numero.required'       => 'O campo Número é obrigatório.',
            'estado.required'       => 'O campo Estado é obrigatório.',
            'bairro.required'       => 'O campo Bairro é obrigatório.',
        ];
    }
}
