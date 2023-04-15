<?php

namespace CRM\Models\CadConsulta\CadConsultaImagem;

use CRM\Base\CRMModel;

class CadConsultaImagem extends CRMModel {

    protected $table      = 'cad_consulta_imagem';
    protected $primaryKey = 'id_arquivo';
    protected $guarded    = [''];

    public function filter($query, array $params = [])
    {
        $uuid = (int)($params['uuid'] ?? '');

        if ($uuid) {
            $query->where('uuid', $uuid);
        }

        return $query;
    }
}
