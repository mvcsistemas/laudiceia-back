<?php

namespace CRM\Models\UsersImage;

use CRM\Base\CRMRequest;

class UsersImageRequest extends CRMRequest {

    public function rules()
    {
        return [
            'id_arquivo' => '',
            'id_user'    => 'required',
        ];
    }
}
