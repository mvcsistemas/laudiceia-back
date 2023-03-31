<?php

namespace MVC\Models\CadPaciente;

use MVC\Base\MVCController;

class CadPacienteController extends MVCController {

    protected CadPacienteService   $service;
    protected               $resource;

    public function __construct(CadPacienteService $service)
    {
        $this->service  = $service;
        $this->resource = CadPacienteResource::class;
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

    public function store(CadPacienteRequest $request)
    {
        $request['data_nascimento'] = setData($request['data_nascimento']);

        $row = $this->service->create($request->all());

        return $this->responseBuilderRow($row, true, 201);
    }

    public function update($uuid, CadPacienteRequest $request)
    {
        $request['data_nascimento'] = setData($request['data_nascimento']);

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
}
