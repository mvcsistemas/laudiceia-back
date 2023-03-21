<?php

namespace MVC\Models\CadFichaAnamnese;

use MVC\Base\MVCController;
use MVC\Models\CadPaciente\CadPaciente;

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

    public function show($uuid)
    {
        $row = $this->service->showByUuid($uuid);

        return $this->responseBuilderRow($row);
    }

    public function store(CadFichaAnamneseRequest $request)
    {
        $row = $this->service->create($request->all());

        return $this->responseBuilderRow($row, true, 201);
    }

    public function update($uuid_paciente, $id_ficha, CadFichaAnamneseRequest $request)
    {
        $this->service->updateById($id_ficha, $request->all());

        return $this->responseBuilderRow([], false, 204);
    }

    public function destroy($uuid_paciente, $id_ficha)
    {
        $this->service->deleteById($id_ficha);

        return $this->responseBuilderRow([], false, 204);
    }

    public function hasFichaAnamnese($uuid)
    {
        $row = $this->service->hasFichaAnamnese($uuid);

        if($row){
            return $this->show($uuid);
        }

        return response()->json();
    }
}
