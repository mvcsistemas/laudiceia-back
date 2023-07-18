<?php

namespace MVC\Models\Painel;

use MVC\Base\MVCController;

class PainelController extends MVCController {

    protected PainelService $service;

    public function __construct(PainelService $service)
    {
        $this->service  = $service;
    }

    public function infoGeral()
    {
       // $this->authorize('view', auth()->user());

        $rows = $this->service->infoGeral();

        return $rows;
    }

    public function infoDinheiro($ano_filtro)
    {
        //$this->authorize('view', auth()->user());

        $rows = $this->service->infoDinheiro($ano_filtro);

        return $rows;
    }
}
