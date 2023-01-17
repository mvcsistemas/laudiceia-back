<?php

namespace MVC\Models\CadMedico;

use MVC\Base\MVCModel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\Access\Authorizable;

class CadMedico extends MVCModel implements AuthenticatableContract, AuthorizableContract
{

    use Authenticatable, Authorizable;

    protected $table = 'cad_medico';
    protected $primaryKey = 'id_medico';
    protected $guarded = [''];

    public function filter($query, array $params = [])
    {
        $id = (int)($params['id_medico'] ?? '');

        if ($id) {
            $query->where('id_medico', $id);
        }

        return $query;
    }
}
