<?php

namespace MVC\Models\CadClinica;

use MVC\Base\MVCService;

class CadClinicaService extends MVCService {

    protected CadClinica $model;

    public function __construct(CadClinica $model)
    {
        $this->model = $model;
    }
}
