<?php

namespace MVC\Models\CadClinicaMedico;

use MVC\Base\MVCController;

class CadClinicaMedicoController extends MVCController
{

    protected CadClinicaMedicoService $service;
    protected $resource;

    public function __construct(CadClinicaMedicoService $service)
    {
        $this->service  = $service;
        $this->resource = CadClinicaMedicoResource::class;
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

    public function store(CadClinicaMedicoRequest $request)
    {
        $row = $this->service->create($request->all());

        return $this->responseBuilderRow($row, true, 201);
    }

    public function update($uuid, CadClinicaMedicoRequest $request)
    {
        $this->service->updateByUuid($uuid, $request->all());

        return $this->responseBuilderRow([], false, 204);
    }

    public function destroy($uuid)
    {
        $this->service->deleteByUuid($uuid);

        return $this->responseBuilderRow([], false, 204);
    }
}
