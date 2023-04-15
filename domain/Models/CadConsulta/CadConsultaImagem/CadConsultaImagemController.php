<?php

namespace CRM\Models\CadConsulta\CadConsultaImagem;

use CRM\Base\CRMController;
use Illuminate\Http\Request;

class CadConsultaImagemController extends CRMController {

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

    public function store(int $id_user, Request $request)
    {
        $payload = $request->validate([
            'arq_conteudo' => 'required|file'
        ]);

        $this->service->upload($id_user, $payload);

        return $this->responseBuilderRow([], false, 201);
    }

    public function destroy(int $id_user, int $id_arquivo)
    {
        $this->service->apagarImagem($id_user, $id_arquivo);

        return $this->responseBuilderRow([], false, 204);
    }

    public function download(int $id_user, int $id_arquivo)
    {
        $fileBase64 = $this->service->download($id_user, $id_arquivo);

        $payload['data'] = [['file' => $fileBase64]];

        return $payload;
    }
}
