<?php

namespace MVC\Models\CadConsulta\CadConsultaImagem;

use MVC\Base\MVCController;
use Illuminate\Http\Request;
use MVC\Models\CadConsulta\CadConsulta;

class CadConsultaImagemController extends MVCController {

    protected CadConsultaImagemService $service;
    protected                          $resource;

    public function __construct(CadConsultaImagemService $service)
    {
        $this->service  = $service;
        $this->resource = CadConsultaImagemResource::class;
    }

    public function lists($uuid)
    {
        $rows = $this->service->lists(['uuid' => $uuid]);

        return $this->responseBuilder($rows);
    }

    public function show($uuid)
    {
        $row = $this->service->showById(1);

        return $this->responseBuilderRow($row);
    }

    public function store(string $uuid, CadConsultaImagemRequest $request)
    {
        $this->service->createUpload($uuid, $request->all());

        return $this->responseBuilderRow([], false, 201);
    }

    public function update(string $uuid, int $id_arquivo, Request $request)
    {
        $this->service->updateById($id_arquivo, $request->all());

        return $this->responseBuilderRow([], false, 204);
    }

    public function destroy(string $uuid, int $id_arquivo)
    {
        $consulta = CadConsulta::findByUuid($uuid);

        $this->service->apagarImagem($consulta->id_consulta, $id_arquivo);

        return $this->responseBuilderRow([], false, 204);
    }

    public function download(string $uuid, int $id_arquivo)
    {
        $consulta = CadConsulta::findByUuid($uuid);

        return $this->service->download($consulta->id_consulta, $id_arquivo);
    }
}
