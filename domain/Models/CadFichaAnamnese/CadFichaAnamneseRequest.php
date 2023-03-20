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
            'bairro' => '',
            'celular' => '',
            'cep' => '',
            'cidade' => '',
            'complemento' => '',
            'cpf' => '',
            'data_nascimento' => '',
            'email' => '',
            'endereco' => '',
            'estado' => '',
            'estado_civil' => '',
            'nome_paciente' => '',
            'numero' => '',
            'profissao' => '',
            'sexo' => '',
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
