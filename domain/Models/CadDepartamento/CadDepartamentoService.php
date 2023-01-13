<?php

namespace MVC\Models\CadDepartamento;

use MVC\Base\MVCService;

class CadDepartamentoService extends MVCService {

    protected CadDepartamento $model;

    public function __construct(CadDepartamento $model)
    {
        $this->model = $model;
    }
}
