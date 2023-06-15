<?php

namespace MVC\Models\CadFuncionario;

use MVC\Base\MVCService;

class CadFuncionarioService extends MVCService {

    protected CadFuncionario $model;

    public function __construct(CadFuncionario $model)
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
