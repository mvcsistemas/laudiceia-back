<?php

namespace MVC\Models\CadFuncionario;

use MVC\Base\MVCController;

class CadFuncionarioController extends MVCController {

    protected CadFuncionarioService   $service;
    protected               $resource;

    public function __construct(CadFuncionarioService $service)
    {
        $this->service  = $service;
        $this->resource = CadFuncionarioResource::class;
    }

    public function index()
    {
        $rows = $this->service->index();

        return $this->responseBuilder($rows);
    }

    public function show($id)
    {
        $row = $this->service->showById($id);

        return $this->responseBuilderRow($row);
    }

    public function store(CadFuncionarioRequest $request)
    {
        $row = $this->service->create($request->all());

        return $this->responseBuilderRow($row, true, 201);
    }

    public function update($id, CadFuncionarioRequest $request)
    {
        $this->service->updateById($id, $request->all());

        return $this->responseBuilderRow([], false, 204);
    }

    public function destroy($id)
    {
        $this->service->deleteById($id);

        return $this->responseBuilderRow([], false, 204);
    }
}
