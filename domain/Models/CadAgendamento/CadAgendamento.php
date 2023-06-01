<?php

namespace MVC\Models\CadAgendamento;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadAgendamento extends MVCModel {

    use HasUuid;

    protected $table      = 'cad_agendamento';
    protected $primaryKey = 'id_agendamento';
    protected $guarded    = [''];
    public    $timestamps = true;

    public function index(){
        return $this->select('cad_agendamento.*', 'cad_paciente.nome_paciente')
                    ->join('cad_paciente', 'cad_paciente.id_paciente', 'cad_agendamento.id_paciente');
    }

    public function filter($query, array $params = [])
    {
        $id              = (int)($params['id_agendamento'] ?? '');
        $uuid            = (string)($params['uuid'] ?? '');
        $tipo_ordenacao  = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao = $params['campo_ordenacao'] ?? '';

        if ($id) {
            $query->where('id_agendamento', $id);
        }

        if ($uuid) {
            $query->where('uuid', $uuid);
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('data_agendamento')
                  ->orderBy('hora_inicio');
        }

        return $query;
    }
}
