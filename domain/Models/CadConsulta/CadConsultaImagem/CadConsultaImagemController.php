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

    public function store(string $uuid, CadConsultaImagemRequest $request)
    {
        $consulta = CadConsulta::findByUuid($uuid);

        $this->service->upload($consulta->id_consulta, $request->all());

        return $this->responseBuilderRow([], false, 201);
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

        $data = $this->service->download($consulta->id_consulta, $id_arquivo);

        $payload['data'] = ['arq_conteudo' => $data['file'], 'arqImagem' => $data['arqImagem']];

        return $payload;
    }
}
