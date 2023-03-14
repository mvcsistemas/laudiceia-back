<?php

namespace MVC\Models\CadFichaAnamnese;

use MVC\Base\MVCService;

class CadFichaAnamneseService extends MVCService {

    protected CadFichaAnamnese $model;

    public function __construct(CadFichaAnamnese $model)
    {
        $this->model = $model;
    }
}
