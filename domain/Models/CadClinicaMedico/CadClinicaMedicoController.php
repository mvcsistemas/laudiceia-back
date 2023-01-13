<?php

namespace MVC\Models\CadClinicaMedico;

use MVC\Base\MVCController;

class CadClinicaMedicoController extends MVCController
{

    protected CadFuncionarioService $service;
    protected $resource;

    public function __construct(CadFuncionarioService $service)
    {
        $this->service = $service;
        $this->resource = CadClinicaMedicoResource::class;
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

    public function store(CadClinicaMedicoRequest $request)
    {
        $row = $this->service->create($request->all());

        return $this->responseBuilderRow($row, true, 201);
    }

    public function update($id, CadClinicaMedicoRequest $request)
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
