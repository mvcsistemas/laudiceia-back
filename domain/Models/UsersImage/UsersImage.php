<?php

namespace CRM\Models\UsersImage;

use CRM\Base\CRMModel;

class UsersImage extends CRMModel {

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
