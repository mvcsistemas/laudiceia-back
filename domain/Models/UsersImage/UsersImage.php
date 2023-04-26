<?php

namespace MVC\Models\UsersImage;

use MVC\Base\MVCModel;

class UsersImage extends MVCModel {

    protected $table      = 'users_image';
    protected $primaryKey = 'id_arquivo';
    protected $guarded    = [''];

    public function filter($query, array $params = [])
    {
        $uuid = (int)($params['uuid'] ?? '');

        if ($uuid) {
            $query->where('uuid', $uuid);
        }

        return $query;
    }
}
