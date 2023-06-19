<?php

namespace MVC\Models\CadPodologo;

use MVC\Base\MVCService;

class CadPodologoService extends MVCService {

    protected CadPodologo $model;

    public function __construct(CadPodologo $model)
    {
        $this->model = $model;
    }

    public function deleteByUuid($uuid){
        return $this->model::findByUuid($uuid)->update([
            'ativo'          => 0,
            'acesso_sistema' => 0
        ]);
    }
}
