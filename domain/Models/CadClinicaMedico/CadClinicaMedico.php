<?php

namespace MVC\Models\CadClinicaPodologo;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadClinicaPodologo extends MVCModel
{

    use HasUuid;

    protected $table      = 'cad_clinica_podologo';
    protected $primaryKey = 'id_clinica_podologo';
    protected $guarded    = [''];
    public    $timestamps = true;

    public function filter($query, array $params = [])
    {
        $id = (int)($params['id_clinica_podologo'] ?? '');

        if ($id) {
            $query->where('id_clinica_podologo', $id);
        }

        return $query;
    }
}
