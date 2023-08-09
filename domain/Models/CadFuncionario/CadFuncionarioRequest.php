<?php

namespace MVC\Models\CadFuncionario;

use MVC\Base\MVCRequest;
use Illuminate\Validation\Rule;
use MVC\Rules\CadFuncionarioRule;

class CadFuncionarioRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'uuid'             => '',
            'id_departamento'  => 'required',
            'cpf'              => 'required|cpf',
            'email'            => ['required','email', new CadFuncionarioRule()],
            'endereco'         => 'required',
            'numero'           => 'required',
            'complemento'      => '',
            'bairro'           => 'required',
            'estado'           => 'required',
            'nome_funcionario' => 'required',
            'telefone'         => 'required',
            'created_at'       => '',
            'updated_at'       => '',
        ];
    }

    public function messages()
    {
        return [
            'id_departamento.required'  => 'O campo Departamento é obrigatório.',
            'cpf.required'              => 'O campo CPF é obrigatório.',
            'email.required'            => 'O campo E-mail é obrigatório.',
            'email.email'               => 'O campo E-mail está em um formato inválido.',
            'endereco.required'         => 'O campo Endereço é obrigatório.',
            'numero.required'           => 'O campo Número é obrigatório.',
            'complemento.required'      => 'O campo Complemento é obrigatório.',
            'estado.required'           => 'O campo Estado é obrigatório.',
            'nome_funcionario.required' => 'O campo Nome é obrigatório.',
            'telefone.required'         => 'O campo Telefone é obrigatório.',
        ];
    }
}
