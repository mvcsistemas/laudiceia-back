<?php

namespace CRM\Models\CadArquivoDigital;

use CRM\Base\CRMService;

class CadArquivoDigitalService extends CRMService {

    private $file;
    private $fileName;
    private $id_arquivo;

    public function upload($file)
    {
        $this->file     = $file;
        $this->fileName = $this->file->getClientOriginalName();

        if ( ! $this->file->isValid()) {
            throw new \Exception($this->file->getErrorMessage());
        }

        return $this->saveDatabase();
    }

    public function saveDatabase()
    {
        $db   = \DB::getPdo();
        $stmt = $db->prepare("INSERT cad_arquivo_digital (arq_conteudo) values (?)");

        $fp = fopen($this->file->getPathname(), 'rb');

        $stmt->bindParam(1, $fp, \PDO::PARAM_LOB);

        $stmt->execute();

        $this->id_arquivo = $db->lastInsertId();
    }

    public function download()
    {
        $db   = \DB::getPdo();

        $stmt = $db->prepare("
        SELECT arq_conteudo
        FROM cad_arquivo_digital
        WHERE id_arquivo = ?");

        $stmt->execute([$this->id_arquivo]);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function delete($id_arquivo)
    {
        $db   = \DB::getPdo();

        $stmt = $db->prepare("
        DELETE FROM cad_arquivo_digital
        WHERE id_arquivo = ?");

        return $stmt->execute([$id_arquivo]);
    }

    public function setFileId($id_arquivo)
    {
        $this->id_arquivo = $id_arquivo;
    }

    public function getFileId()
    {
        if ( ! $this->id_arquivo) {
            return false;
        }

        return $this->id_arquivo;
    }

    public function getFileName()
    {
        return $this->fileName;
    }
}
