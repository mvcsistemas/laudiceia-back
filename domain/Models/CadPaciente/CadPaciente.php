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

    public function filter($query, array $params = [])
    {
        $id               = (int)($params['id_paciente'] ?? '');
        $uuid             = (string)($params['uuid'] ?? '');
        $nome_paciente    = (string)($params['nome_paciente'] ?? '');
        $cep              = (string)($params['cep'] ?? '');
        $cidade           = (string)($params['cidade'] ?? '');
        $estado           = (string)($params['estado'] ?? '');
        $ativo            = (int)($params['ativo'] ?? 2);
        $tipo_ordenacao   = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao  = $params['campo_ordenacao'] ?? '';

        if ($id) {
            $query->where('id_paciente', $id);
        }

        if ($uuid) {
            $query->where('uuid', $uuid);
        }

        if ($nome_paciente) {
            $query->where('nome_paciente', 'LIKE', "%{$nome_paciente}%");
        }

        if ($cep) {
            $query->where('cep', 'LIKE', "%{$cep}%");
        }

        if ($cidade) {
            $query->where('cidade', 'LIKE', "%{$cidade}%");
        }

        if ($estado) {
            $query->where('estado', 'LIKE', "%{$estado}%");
        }

        if (in_array($ativo, [0, 1])) {
            $query->where('ativo', $ativo);
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('nome_paciente');
        }

        return $query;
    }
}
