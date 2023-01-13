<?php

namespace MVC\Models\CadClinica;

use MVC\Base\MVCModel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\Access\Authorizable;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadClinica extends MVCModel implements AuthenticatableContract, AuthorizableContract {

    use Authenticatable, Authorizable, HasUuid;

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
