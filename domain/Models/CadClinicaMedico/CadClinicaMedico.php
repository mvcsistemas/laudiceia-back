<?php

namespace MVC\Models\CadClinicaMedico;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadClinicaMedico extends MVCModel
{

    use HasUuid;

    protected $table = 'cad_clinica_medico';
    protected $primaryKey = 'id_clinica_medico';
    protected $guarded = [''];
    public $timestamps = true;

    public function filter($query, array $params = [])
    {
        $id = (int)($params['id_clinica_medico'] ?? '');

        if ($id) {
            $query->where('id_clinica_medico', $id);
        }

        return $query;
    }
}
