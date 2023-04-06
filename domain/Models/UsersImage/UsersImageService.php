<?php

namespace CRM\Models\UsersImage;

use CRM\Base\CRMService;
use CRM\Models\CadArquivoDigital\CadArquivoDigitalService;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

class UsersImageService extends CRMService {

    protected UsersImage             $model;
    private CadArquivoDigitalService $cadArquivoDigitalService;

    public function __construct(UsersImage $model, CadArquivoDigitalService $cadArquivoDigitalService)
    {
        $this->model                    = $model;
        $this->cadArquivoDigitalService = $cadArquivoDigitalService;
    }

    public function upload(int $id_user, array $data)
    {
        return DB::transaction(function () use ($id_user, $data) {
            $this->cadArquivoDigitalService->upload($data['arq_conteudo']);

            $fileId = $this->cadArquivoDigitalService->getFileId();

            if ($fileId) {
                $payload = array_merge($data,
                    ['id_user'    => $id_user,
                     'id_arquivo' => $fileId]);

                return $this->model->create($payload);
            }

            throw ValidationException::withMessages(['image' => 'Ocorreu um problema ao anexar o arquivo.']);
        });
    }

    public function download(int $id_user, int $id_arquivo)
    {
        $arqImagem = $this->model
            ->where('id_user', $id_user)
            ->where('id_arquivo', $id_arquivo)
            ->firstOrFail();

        $this->cadArquivoDigitalService->setFileId($arqImagem->id_arquivo);

        $file = $this->cadArquivoDigitalService->download();

        return $file ? base64_encode($file['arq_conteudo']) : '';
    }

    public function apagarImagem(int $id_user, int $id_arquivo)
    {
        return DB::transaction(function () use ($id_user, $id_arquivo) {
            $arqImagem = $this->model
                ->where('id_user', $id_user)
                ->where('id_arquivo', $id_arquivo)
                ->firstOrFail();

            $this->cadArquivoDigitalService->delete($arqImagem->id_arquivo);

            $arqImagem->delete();
        });
    }
}
