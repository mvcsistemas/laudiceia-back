<?php

namespace MVC\Models\Example;

use MVC\Base\MVCModel;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\Access\Authorizable;

class Example extends MVCModel implements AuthenticatableContract, AuthorizableContract {

    use Authenticatable, Authorizable;

    protected $table      = 'example';
    protected $primaryKey = 'id';
    protected $guarded    = [''];

    public function filter($query, array $params = [])
    {
        $id = (int)($params['id'] ?? '');

        if ($id) {
            $query->where('id', $id);
        }

        return $query;
    }
}
