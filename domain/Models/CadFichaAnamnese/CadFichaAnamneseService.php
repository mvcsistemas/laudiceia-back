<?php

namespace MVC\Models\CadFichaAnamnese;

use MVC\Base\MVCService;
use MVC\Models\CadPaciente\CadPaciente;

class CadFichaAnamneseService extends MVCService {

    protected CadFichaAnamnese $model;

    public function __construct(CadFichaAnamnese $model)
    {
        $this->model = $model;
    }

    public function hasFichaAnamnese($uuid){
        $query = $this->model->index();
        $params = ['uuid' => $uuid];

        return $this->filter($query, $params)->first();
    }
}
