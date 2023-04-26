<?php

namespace MVC\Models\UsersImage;

use MVC\Base\MVCRequest;

class UsersImageRequest extends MVCRequest {

    public function rules()
    {
        return [
            'id_arquivo' => '',
            'id_user'    => 'required',
        ];
    }
}
