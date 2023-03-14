<?php

namespace MVC\Models\CadFichaAnamnese;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadFichaAnamnese extends MVCModel {

    use HasUuid;

    protected $table      = 'cad_ficha_anamnese';
    protected $primaryKey = 'id_ficha';
    protected $guarded    = [''];

    public $timestamps = true;

    public function filter($query, array $params = [])
    {
        $id              = (int)($params['id_ficha'] ?? '');
        $tipo_ordenacao  = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao = $params['campo_ordenacao'] ?? '';

        if ($id) {
            $query->where('id_ficha', $id);
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('nome_paciente');
        }

        return $query;
    }
}
