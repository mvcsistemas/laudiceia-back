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

    public function infoDinheiro()
    {
        $this->authorize('view', auth()->user());

        $rows = $this->service->infoDinheiro();

        return $this->responseBuilder($rows);
    }
}
