<?php

namespace MVC\Models\CadClinicaPodologo;

use MVC\Base\MVCService;

class CadClinicaPodologoService extends MVCService {

    protected CadClinicaPodologo $model;

    public function __construct(CadClinicaPodologo $model)
    {
        $this->model = $model;
    }
}
