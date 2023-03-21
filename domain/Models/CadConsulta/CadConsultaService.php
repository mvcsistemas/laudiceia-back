<?php

namespace MVC\Models\CadConsulta;

use MVC\Base\MVCService;

class CadConsultaService extends MVCService {

    protected CadConsulta $model;

    public function __construct(CadConsulta $model)
    {
        $this->model = $model;
    }
}
