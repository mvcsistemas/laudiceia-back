<?php

namespace MVC\Models\CadConsulta\CadConsultaImagem;

use MVC\Base\MVCRequest;

class CadConsultaImagemRequest extends MVCRequest {

    public function rules()
    {
        return [
            'id_arquivo'  => '',
            'observacao'  => '',
            'id_consulta' => 'required',
            'id_user'     => 'required',
            'created_at'  => '',
        ];
    }
}
