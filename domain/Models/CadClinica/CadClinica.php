<?php

namespace MVC\Models\CadClinica;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadClinica extends MVCModel
{

    use HasUuid;

    protected $table      = 'cad_clinica';
    protected $primaryKey = 'id_clinica';
    protected $guarded    = [''];
    public    $timestamps = true;

    public function lookup(array $params = [])
    {
        $rows = $this->select('id_clinica', 'nome_clinica');

        $this->filter($rows, $params);

        return $rows->get();
    }


    public function filter($query, array $params = [])
    {
        $id_clinica = (int)($params['id_clinica'] ?? '');
        $uuid = (string)($params['uuid'] ?? '');
        $nome_clinica = (string)($params['nome_clinica'] ?? '');
        $cep = (string)($params['cep'] ?? '');
        $cidade = (string)($params['cidade'] ?? '');
        $estado = (string)($params['estado'] ?? '');
        $tipo_ordenacao  = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao = $params['campo_ordenacao'] ?? '';

        if ($id_clinica) {
            $query->where('id_clinica', $id_clinica);
        }

        if ($uuid) {
            $query->where('uuid', $uuid);
        }

        if ($nome_clinica) {
            $query->where('nome_clinica', 'LIKE', "%{$nome_clinica}%");
        }

        if ($cep) {
            $query->where('cep', $cep);
        }

        if ($cidade) {
            $query->where('cidade', 'LIKE', "%{$cidade}%");
        }

        if ($estado) {
            $query->where('estado', 'LIKE', "%{$estado}%");
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('nome_clinica');
        }
        return $query;
    }
}
