<?php

namespace MVC\Models\CadFichaAnamnese;

use MVC\Base\MVCModel;

class CadFichaAnamnese extends MVCModel {

    protected $table      = 'cad_ficha_anamnese';
    protected $primaryKey = 'id_ficha';
    protected $guarded    = [''];

    public $timestamps = true;

    public function index(){
        return $this->select('cad_ficha_anamnese.*')
                    -> join('cad_paciente as paciente', 'paciente.id_paciente', 'cad_ficha_anamnese.id_paciente');
    }

    public function filter($query, array $params = [])
    {
        $id              = (int)($params['id_ficha'] ?? '');
        $uuid            = (string)($params['uuid'] ?? '');
        $tipo_ordenacao  = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao = $params['campo_ordenacao'] ?? '';

        if ($id) {
            $query->where('id_ficha', $id);
        }

        if($uuid) {
            $query->where('paciente.uuid', $uuid);
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('nome_paciente');
        }

        return $query;
    }
}
