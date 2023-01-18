<?php

namespace MVC\Models\CadMedico;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadMedico extends MVCModel
{

    use HasUuid;

    protected $table = 'cad_medico';
    protected $primaryKey = 'id_medico';
    protected $guarded = [''];

    public $timestamps = true;

    public function filter($query, array $params = [])
    {
        $id = (int)($params['id_medico'] ?? '');

        if ($id) {
            $query->where('id_medico', $id);
        }

        return $query;
    }
}
