<?php

namespace MVC\Models\CadDepartamento;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadDepartamento extends MVCModel {

    use HasUuid;

    protected $table      = 'cad_departamento';
    protected $primaryKey = 'id_departamento';
    protected $guarded    = [''];
    public    $timestamps = true;

    public function lookup(array $params = [])
    {
        $rows = $this->select('id_departamento', 'dsc_departamento');

        $this->filter($rows, $params);

        return $rows->get();
    }

    public function filter($query, array $params = [])
    {
        $id = (int)($params['id_departamento'] ?? '');
        $uuid = (string)($params['uuid'] ?? '');
        $dsc_departamento = (string)($params['dsc_departamento'] ?? '');
        $tipo_ordenacao  = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao = $params['campo_ordenacao'] ?? '';

        if ($id) {
            $query->where('id_departamento', $id);
        }

        if ($uuid) {
            $query->where('uuid', $uuid);
        }

        if ($dsc_departamento) {
            $query->where('dsc_departamento', 'LIKE', "%{$dsc_departamento}%");
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('dsc_departamento');
        }

        return $query;
    }
}
