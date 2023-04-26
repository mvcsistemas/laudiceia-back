<?php

namespace MVC\Models\CadConsulta\CadConsultaImagem;

use MVC\Base\MVCController;
use Illuminate\Http\Request;

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

    public function store(int $id_consulta, Request $request)
    {
        $payload = $request->validate([
            'arq_conteudo' => 'required|file'
        ]);

        $this->service->upload($id_consulta, $payload);

        return $this->responseBuilderRow([], false, 201);
    }

    public function destroy(int $id_consulta, int $id_arquivo)
    {
        $this->service->apagarImagem($id_consulta, $id_arquivo);

        return $this->responseBuilderRow([], false, 204);
    }

    public function download(int $id_consulta, int $id_arquivo)
    {
        $fileBase64 = $this->service->download($id_consulta, $id_arquivo);

        $payload['data'] = [['file' => $fileBase64]];

        return $payload;
    }
}
