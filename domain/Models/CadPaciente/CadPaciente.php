<?php

namespace MVC\Models\CadPaciente;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadPaciente extends MVCModel {

    use HasUuid;

    protected $table      = 'cad_paciente';
    protected $primaryKey = 'id_paciente';
    protected $guarded    = [''];

    public $timestamps = true;

    public function lookup(array $params = [])
    {
        $rows = $this->select('id_paciente', 'nome_paciente');

        $this->filter($rows, $params);

        return $rows->get();
    }

    public function filter($query, array $params = [])
    {
        $id              = (int)($params['id_paciente'] ?? '');
        $uuid            = (string)($params['uuid'] ?? '');
        $nome_paciente   = (string)($params['nome_paciente'] ?? '');
        $email           = (string)($params['email'] ?? '');
        $cidade          = (string)($params['cidade'] ?? '');
        $estado          = (string)($params['estado'] ?? '');
        $cpf             = (string)($params['cpf'] ?? '');
        $telefone        = (string)($params['telefone'] ?? '');
        $celular         = (string)($params['celular'] ?? '');
        $tipo_ordenacao  = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao = $params['campo_ordenacao'] ?? '';

        if ($id) {
            $query->where('id_paciente', $id);
        }

        if ($uuid) {
            $query->where('uuid', $uuid);
        }

        if ($nome_paciente) {
            $query->where('nome_paciente', 'LIKE', "%{$nome_paciente}%");
        }

        if ($email) {
            $query->where('email', 'LIKE', "%{$email}%");
        }

        if ($cidade) {
            $query->where('cidade', 'LIKE', "%{$cidade}%");
        }

        if ($estado) {
            $query->where('estado', 'LIKE', "%{$estado}%");
        }

        if ($cpf) {
            $query->where('cpf', $cpf);
        }

        if ($telefone) {
            $query->where('telefone', $telefone);
        }

        if ($celular) {
            $query->where('celular', $celular);
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('nome_paciente');
        }

        return $query;
    }
}
