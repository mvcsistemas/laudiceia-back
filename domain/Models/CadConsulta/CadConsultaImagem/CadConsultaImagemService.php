<?php

namespace MVC\Models\CadConsulta\CadConsultaImagem;

use MVC\Base\MVCService;
use MVC\Models\CadArquivoDigital\CadArquivoDigitalService;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use MVC\Models\CadConsulta\CadConsulta;
use Illuminate\Support\Facades\Storage;

class CadConsultaImagemService extends MVCService {

    protected CadConsultaImagem $model;

    public function __construct(CadConsultaImagem $model)
    {
        $this->model = $model;
    }

    public function createUpload(string $uuid, array $request)
    {
        $consulta = CadConsulta::findByUuid($uuid);

        $path = $request['arq_conteudo']->store('consultaImagens');

        $payload = array_merge($request, ['id_consulta' => $consulta->id_consulta,
                                          'path'        => $path]);

        return $this->model->create($payload);
    }


    public function download(int $id_consulta, int $id_arquivo)
    {
        $imagem = $this->model
            ->where('id_consulta', $id_consulta)
            ->where('id_arquivo', $id_arquivo)
            ->firstOrFail();

        return Storage::download($imagem->path);
    }

    /* public function upload(int $id_consulta, array $data)
    {
        return DB::transaction(function () use ($id_consulta, $data) {
            $this->cadArquivoDigitalService->upload($data['arq_conteudo']);

            $fileId = $this->cadArquivoDigitalService->getFileId();

            if ($fileId) {
                $payload = array_merge($data,
                    ['id_consulta' => $id_consulta,
                     'id_arquivo'  => $fileId]);

                return $this->model->create($payload);
            }

            throw ValidationException::withMessages(['image' => 'Ocorreu um problema ao anexar o arquivo.']);
        });
    }

    public function download(int $id_consulta, int $id_arquivo)
    {
        $arqImagem = $this->model
            ->where('id_consulta', $id_consulta)
            ->where('id_arquivo', $id_arquivo)
            ->firstOrFail();

        $this->cadArquivoDigitalService->setFileId($arqImagem->id_arquivo);

        $file = $this->cadArquivoDigitalService->download();

        $file = $file ? base64_encode($file['arq_conteudo']) : '';

        return ['file' => $file, 'arqImagem' => $arqImagem];
    }

    public function apagarImagem(int $id_consulta, int $id_arquivo)
    {
        return DB::transaction(function () use ($id_consulta, $id_arquivo) {
            $arqImagem = $this->model
                ->where('id_consulta', $id_consulta)
                ->where('id_arquivo', $id_arquivo)
                ->firstOrFail();

            $this->cadArquivoDigitalService->delete($arqImagem->id_arquivo);

            $arqImagem->delete();
        });
    } */
}
