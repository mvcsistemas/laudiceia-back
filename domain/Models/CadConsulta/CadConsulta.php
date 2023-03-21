<?php

namespace MVC\Models\CadConsulta;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadConsulta extends MVCModel {

    use HasUuid;

    protected $table      = 'cad_consulta';
    protected $primaryKey = 'id_consulta';
    protected $guarded    = [''];
    public    $timestamps = true;

    public function filter($query, array $params = [])
    {
        $id = (int)($params['id_consulta'] ?? '');
        $uuid = (string)($params['uuid'] ?? '');
        $dsc_departamento = (string)($params['dsc_departamento'] ?? '');
        $tipo_ordenacao  = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao = $params['campo_ordenacao'] ?? '';

        if ($id) {
            $query->where('id_consulta', $id);
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
