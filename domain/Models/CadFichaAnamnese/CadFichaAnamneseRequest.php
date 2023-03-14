<?php

namespace MVC\Models\CadFichaAnamnese;

use MVC\Base\MVCRequest;

class CadFichaAnamneseRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'id_paciente' => '',
            'uuid' => '',
            'bairro' => 'required',
            'celular' => '',
            'cep' => '',
            'cidade' => 'required',
            'complemento' => '',
            'cpf' => 'required|cpf',
            'data_nascimento' => 'required',
            'email' => '',
            'endereco' => 'required',
            'estado' => 'required',
            'estado_civil' => 'required',
            'nome_paciente' => 'required',
            'numero' => 'required',
            'profissao' => 'required',
            'sexo' => 'required',
            'telefone' => '',
            'created_at' => '',
            'updated_at' => '',
        ];
    }

    public function messages()
    {
        return [
            'bairro.required'           => 'O campo Bairro é obrigatório.',
            'cpf.required'              => 'O campo CPF é obrigatório.',
            'cidade.required'           => 'O campo Cidade é obrigatório.',
            'data_nascimento.required'  => 'O campo Data de Nascimento é obrigatório',
            'endereco.required'         => 'O campo Endereço é obrigatório.',
            'numero.required'           => 'O campo Número é obrigatório.',
            'estado.required'           => 'O campo Estado é obrigatório.',
            'nome_paciente.required'    => 'O campo Nome é obrigatório.',
            'estado_civil.required'     => 'O campo Estado Civil é obrigatório.',
            'profissao.required'        => 'O campo Profissão é obrigatório',
            'sexo.required'             => 'O campo Sexo é obrigatório',
        ];
    }
}
