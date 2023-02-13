<?php

namespace MVC\Models\CadFuncionario;

use Illuminate\Http\Resources\Json\JsonResource;

class CadFuncionarioResource extends JsonResource
{

    public function toArray($request)
    {
        $retorno = [
            'id_funcionario' => $this->id_funcionario,
            'uuid' => $this->uuid,
            'id_departamento' => $this->id_departamento,
            'acesso_sistema' => $this->acesso_sistema,
            'ativo' => $this->ativo,
            'cep' => $this->cep,
            'cidade' => $this->cidade,
            'complemento' => $this->complemento,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'endereco' => $this->endereco,
            'estado' => $this->estado,
            'nome_funcionario' => $this->nome_funcionario,
            'numero' => $this->numero,
            'telefone' => $this->telefone,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];

        return $retorno;
    }
}
