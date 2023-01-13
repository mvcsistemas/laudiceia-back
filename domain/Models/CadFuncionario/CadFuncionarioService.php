<?php

namespace MVC\Models\CadFuncionario;

use MVC\Base\MVCService;

class CadFuncionarioService extends MVCService {

    protected CadFuncionario $model;

    public function __construct(CadFuncionario $model)
    {
        $this->model = $model;
    }
}
