<?php

namespace MVC\Models\CadMedico;

use MVC\Base\MVCModel;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadMedico extends MVCModel
{
    use HasUuid;

    protected $table = 'cad_medico';
    protected $primaryKey = 'id_medico';
    protected $guarded = [''];
    public $timestamps = true;

    public function index(){
        return $this->select('cad_medico.*', 'cad_clinica.nome_clinica as nome_clinica')
                    ->join('cad_clinica', 'cad_clinica.id_clinica', 'cad_medico.id_clinica');
    }


    public function filter($query, array $params = [])
    {
        $id_medico = (int)($params['id_medico'] ?? '');
        $uuid = (string)($params['uuid'] ?? '');
        $nome_medico = (string)($params['nome_medico'] ?? '');
        $email = (string)($params['email'] ?? '');
        $telefone_interno = (string)($params['telefone_interno'] ?? '');
        $id_clinica = (int)($params['id_clinica'] ?? '');
        $ativo = (int)($params['ativo'] ?? 2);
        $tipo_ordenacao  = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao = $params['campo_ordenacao'] ?? '';

        if ($id_medico) {
            $query->where('cad_medico.id_medico', $id_medico);
        }

        if ($uuid) {
            $query->where('cad_medico.uuid', $uuid);
        }

        if ($nome_medico) {
            $query->where('cad_medico.nome_medico', 'LIKE', "%{$nome_medico}%");
        }

        if ($email) {
            $query->where('cad_medico.email', 'LIKE', "%{$email}%");
        }

        if ($telefone_interno) {
            $query->where('cad_medico.telefone_interno', 'LIKE', "%{$telefone_interno}%");
        }

        if ($id_clinica) {
            $query->where('cad_medico.id_clinica', $id_clinica);
        }

        if (in_array($ativo, [0, 1])) {
            $query->where('cad_medico.ativo', $ativo);
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('cad_medico.nome_medico');
        }

        return $query;
    }
}
