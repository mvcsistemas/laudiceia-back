<?php

namespace MVC\Models\CadFichaAnamnese;

use MVC\Base\MVCController;

class CadFichaAnamneseController extends MVCController {

    protected CadFichaAnamneseService   $service;
    protected               $resource;

    public function __construct(CadFichaAnamneseService $service)
    {
        $this->service  = $service;
        $this->resource = CadFichaAnamneseResource::class;
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

    public function store(CadFichaAnamneseRequest $request)
    {
        $row = $this->service->create($request->all());

        return $this->responseBuilderRow($row, true, 201);
    }

    public function update($id, CadFichaAnamneseRequest $request)
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
