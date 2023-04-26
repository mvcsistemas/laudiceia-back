<?php

namespace MVC\Models\CadConsulta\CadConsultaImagem;

use MVC\Base\MVCModel;

class CadConsultaImagem extends MVCModel {

    protected $table      = 'cad_consulta_imagem';
    protected $primaryKey = 'id_arquivo';
    protected $guarded    = [''];

    public function index(){
        return $this->select('cad_consulta_imagem.*')
                    ->join('cad_consulta', 'cad_consulta.id_consulta', 'cad_consulta_imagem.id_consulta');
    }

    public function filter($query, array $params = [])
    {
        $uuid = (int)($params['uuid'] ?? '');

        if ($uuid) {
            $query->where('cad_consulta.uuid', $uuid);
        }

        return $query;
    }
}
