<?php

namespace MVC\Models\CadAgendamento;

use MVC\Base\MVCService;

class CadAgendamentoService extends MVCService {

    protected CadAgendamento $model;

    public function __construct(CadAgendamento $model)
    {
        $this->model = $model;
    }
}
