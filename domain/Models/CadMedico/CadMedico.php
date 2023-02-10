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
        return $this->select('*', 'cad_clinica.nome_clinica')
                    ->join('cad_clinica', 'cad_clinica.id_clinica', 'cad_medico.id_clinica');
    }

    public function filter($query, array $params = [])
    {
        $id_medico = (int)($params['id_medico'] ?? '');
        $nome_medico = (string)($params['nome_medico'] ?? '');
        $email = (string)($params['email'] ?? '');
        $telefone_interno = (string)($params['telefone_interno'] ?? '');
        $id_clinica = (int)($params['id_clinica'] ?? '');

        if ($id_medico) {
            $query->where('id_medico', $id_medico);
        }

        if ($nome_medico) {
            $query->where('nome_medico', 'LIKE', "%{$nome_medico}%");
        }

        if ($email) {
            $query->where('email', 'LIKE', "%{$email}%");
        }

        if ($telefone_interno) {
            $query->where('telefone_interno', 'LIKE', "%{$telefone_interno}%");
        }

        if ($id_clinica) {
            $query->where('cad_medico.id_clinica', $id_clinica);
        }
        return $query;
    }
}
