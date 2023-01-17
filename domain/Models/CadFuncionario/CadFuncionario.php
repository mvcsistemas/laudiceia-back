<?php

namespace MVC\Models\CadFuncionario;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadFuncionario extends MVCModel {

    use HasUuid;

    protected $table      = 'cad_funcionario';
    protected $primaryKey = 'id_funcionario';
    protected $guarded    = [''];

    public function filter($query, array $params = [])
    {
        $id = (int)($params['id_funcionario'] ?? '');

        if ($id) {
            $query->where('id_funcionario', $id);
        }

        return $query;
    }
}
