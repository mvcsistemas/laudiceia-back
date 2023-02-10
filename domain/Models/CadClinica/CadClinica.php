<?php

namespace MVC\Models\CadClinica;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadClinica extends MVCModel
{

    use HasUuid;

    protected $table = 'cad_clinica';
    protected $primaryKey = 'id_clinica';
    protected $guarded = [''];
    public $timestamps = true;

    public function lookup(array $params = [])
    {
        $rows = $this->select('id_clinica', 'nome_clinica');

        $this->filter($rows, $params);

        return $rows->get();
    }


    public function filter($query, array $params = [])
    {
        $id_clinica = (int)($params['id_clinica'] ?? '');

        if ($id_clinica) {
            $query->where('id_clinica', $id_clinica);
        }

        return $query;
    }
}
