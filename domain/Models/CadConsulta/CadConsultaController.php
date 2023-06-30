<?php

namespace MVC\Models\CadConsulta;

use MVC\Base\MVCController;

class CadConsultaController extends MVCController {

    protected CadConsultaService   $service;
    protected               $resource;

    public function __construct(CadConsultaService $service)
    {
        $this->service  = $service;
        $this->resource = CadConsultaResource::class;
    }

    public function index()
    {
        $rows = $this->service->index();

        return $this->responseBuilder($rows);
    }

    public function show($uuid)
    {
        $row = $this->service->showByUuid($uuid);

        return $this->responseBuilderRow($row);
    }

    public function store(CadConsultaRequest $request)
    {
        $request['data_consulta'] = setData($request['data_consulta']);

        $row = $this->service->create($request->all());

        return $this->responseBuilderRow($row, true, 201);
    }

    public function update($uuid, CadConsultaRequest $request)
    {
        $request['data_consulta'] = setData($request['data_consulta']);

        $this->service->updateByUuid($uuid, $request->all());

        return $this->responseBuilderRow([], false, 204);
    }

    public function destroy($uuid)
    {
        $this->service->deleteByUuid($uuid);

        return $this->responseBuilderRow([], false, 204);
    }

    public function lookup()
    {
        return $this->service->lookup(request()->all());
    }

    public function termoAceitacao()
    {
        return $this->service->termoAceitacao();
    }
}
