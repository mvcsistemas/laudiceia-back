<?php

namespace MVC\Models\CadClinicaMedico;

use MVC\Base\MVCService;

class CadClinicaMedicoService extends MVCService {

    protected CadClinicaMedico $model;

    public function __construct(CadClinicaMedico $model)
    {
        $this->model = $model;
    }
}
