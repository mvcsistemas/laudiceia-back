<?php

namespace MVC\Models\CadDepartamento;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadDepartamento extends MVCModel {

    use HasUuid;

    protected $table      = 'cad_departamento';
    protected $primaryKey = 'id_departamento';
    protected $guarded    = [''];

    public $timestamps = true;

    public function filter($query, array $params = [])
    {
        $id = (int)($params['id_departamento'] ?? '');

        if ($id) {
            $query->where('id_departamento', $id);
        }

        return $query;
    }
}
