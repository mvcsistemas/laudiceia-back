<?php

namespace MVC\Models\Example;

use MVC\Base\MVCController;

class ExampleController extends MVCController {

    protected CadMedicoService   $service;
    protected               $resource;

    public function __construct(CadMedicoService $service)
    {
        $this->service  = $service;
        $this->resource = CadMedicoResource::class;
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

    public function store(CadMedicoRequest $request)
    {
        $row = $this->service->create($request->all());

        return $this->responseBuilderRow($row, true, 201);
    }

    public function update($id, CadMedicoRequest $request)
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
