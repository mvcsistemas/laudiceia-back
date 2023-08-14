<?php

namespace MVC\Models\CadConsulta;

use MVC\Base\MVCController;
use MVC\Models\CadConsulta\CadConsulta;
use MVC\Models\CadConsulta\CadConsultaImagem\CadConsultaImagem;
use MVC\Models\CadConsulta\CadConsultaImagem\CadConsultaImagemService;

class CadConsultaController extends MVCController {

    protected CadConsultaService       $service;
    protected CadConsultaImagemService $service_image;
    protected                          $resource;

    public function __construct(CadConsultaService $service, CadConsultaImagemService $service_image)
    {
        $this->service       = $service;
        $this->service_image = $service_image;
        $this->resource      = CadConsultaResource::class;
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

    public function store(CadConsultaRequest $request)
    {
        $request['data_consulta'] = setData($request['data_consulta']);

        $row = $this->service->create($request->all());

        return $this->responseBuilderRow($row, true, 201);
    }

    public function update($uuid, CadConsultaRequest $request)
    {
        $request['data_consulta'] = setData($request['data_consulta']);

        $this->service->updateByUuid($uuid, $request->all());

        return $this->responseBuilderRow([], false, 204);
    }

    public function destroy($uuid)
    {
        $consulta = CadConsulta::findByUuid($uuid);
        $imagens  = CadConsultaImagem::where('id_consulta', $consulta->id_consulta)->get();

        if($imagens){
            foreach ($imagens as $imagem) {
                $this->service_image->deleteUpload($imagem->id_arquivo);
            }
        }

        $this->service->deleteByUuid($uuid);

        return $this->responseBuilderRow([], false, 204);
    }

    public function historicoConsulta(CadConsultaHistoricoRequest $request)
    {
        $this->resource = CadConsultaResourceHistorico::class;

        $rows = $this->service->index();

        return $this->responseBuilder($rows);
    }

    public function lookup()
    {
        return $this->service->lookup(request()->all());
    }

    public function termoAceitacao(string $uuid)
    {
        return $this->service->termoAceitacao($uuid);
    }

    public function recibo(string $uuid)
    {
        return $this->service->recibo($uuid);
    }

    public function historicoConsultaPdf(CadConsultaHistoricoRequest $request)
    {
        $rows = $this->service->index()
                            ->where('cad_consulta.id_paciente', $request->id_paciente)
                            ->whereBetween('cad_consulta.data_consulta', [setData($request->data_inicio), setData($request->data_fim)])
                            ->get();

        return $this->service->historicoConsultaPdf($rows, $request->id_paciente);
    }
}
