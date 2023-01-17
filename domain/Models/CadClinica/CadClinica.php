<?php

namespace MVC\Models\CadClinica;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadClinica extends MVCModel {

    use HasUuid;

    protected $table      = 'cad_clinica';
    protected $primaryKey = 'id_clinica';
    protected $guarded    = [''];

    public function filter($query, array $params = [])
    {
        $id_clinica = (int)($params['id_clinica'] ?? '');

        if ($id_clinica) {
            $query->where('id_clinica', $id_clinica);
        }

        return $query;
    }
}
