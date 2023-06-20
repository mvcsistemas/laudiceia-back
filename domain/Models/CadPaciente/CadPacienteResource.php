<?php

namespace MVC\Models\CadPaciente;

use Illuminate\Http\Resources\Json\JsonResource;

class CadPacienteResource extends JsonResource
{

    public function toArray($request)
    {
        $retorno = [
            'uuid'            => $this->uuid,
            'bairro'          => $this->bairro,
            'celular'         => $this->celular,
            'cep'             => $this->cep,
            'cidade'          => $this->cidade,
            'complemento'     => $this->complemento,
            'cpf'             => $this->cpf,
            'data_nascimento' => setDataFormatoBr($this->data_nascimento),
            'email'           => $this->email,
            'endereco'        => $this->endereco,
            'estado'          => $this->estado,
            'estado_civil'    => $this->estado_civil,
            'nome_paciente'   => $this->nome_paciente,
            'numero'          => $this->numero,
            'profissao'       => $this->profissao,
            'sexo'            => $this->sexo,
            'telefone'        => $this->telefone,
            'created_at'      => $this->created_at,
            'updated_at'      => $this->updated_at,
        ];

        return $retorno;
    }
}
