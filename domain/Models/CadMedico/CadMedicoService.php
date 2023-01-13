<?php

namespace MVC\Models\CadMedico;

use MVC\Base\MVCService;

class CadMedicoService extends MVCService {

    protected CadMedico $model;

    public function __construct(CadMedico $model)
    {
        $this->model = $model;
    }
}
