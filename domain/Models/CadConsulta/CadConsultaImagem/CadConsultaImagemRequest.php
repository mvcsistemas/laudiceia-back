<?php

namespace CRM\Models\CadConsulta\CadConsultaImagem;

use CRM\Base\CRMRequest;

class CadConsultaImagemRequest extends CRMRequest {

    public function rules()
    {
        return [
            'id_arquivo' => '',
            'id_user'    => 'required',
        ];
    }
}
