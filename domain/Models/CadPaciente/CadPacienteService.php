<?php

namespace MVC\Models\CadPaciente;

use MVC\Base\MVCService;

class CadPacienteService extends MVCService {

    protected CadPaciente $model;

    public function __construct(CadPaciente $model)
    {
        $this->model = $model;
    }
}
