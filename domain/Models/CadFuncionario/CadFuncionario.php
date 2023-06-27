<?php

namespace MVC\Models\CadFuncionario;

use MVC\Base\MVCModel;
use MVC\Models\User\User;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadFuncionario extends MVCModel {

    use HasUuid;

    protected $table      = 'cad_funcionario';
    protected $primaryKey = 'id_funcionario';
    protected $guarded    = [''];

    public $timestamps = true;

    public static function boot()
    {
        parent::boot();

        self::created(function ($model) {
            $user = new User;
            $user->email = $model->email;
            $user->tipoCadastro()->associate($model);
            $user->save();
        });
    }

    public function index(){
        return $this->select('cad_funcionario.*', 'cad_departamento.dsc_departamento')
                    ->join('cad_departamento', 'cad_departamento.id_departamento', 'cad_funcionario.id_departamento');
    }

    public function filter($query, array $params = [])
    {
        $id               = (int)($params['id_funcionario'] ?? '');
        $uuid             = (string)($params['uuid'] ?? '');
        $nome_funcionario = (string)($params['nome_funcionario'] ?? '');
        $cep              = (string)($params['cep'] ?? '');
        $cidade           = (string)($params['cidade'] ?? '');
        $estado           = (string)($params['estado'] ?? '');
        $ativo            = (int)($params['ativo'] ?? 2);
        $tipo_ordenacao   = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao  = $params['campo_ordenacao'] ?? '';

        if ($id) {
            $query->where('id_funcionario', $id);
        }

        if ($uuid) {
            $query->where('cad_funcionario.uuid', $uuid);
        }

        if ($nome_funcionario) {
            $query->where('nome_funcionario', 'LIKE', "%{$nome_funcionario}%");
        }

        if ($cep) {
            $query->where('cep', 'LIKE', "%{$cep}%");
        }

        if ($cidade) {
            $query->where('cidade', 'LIKE', "%{$cidade}%");
        }

        if ($estado) {
            $query->where('estado', 'LIKE', "%{$estado}%");
        }

        if (in_array($ativo, [0, 1])) {
            $query->where('ativo', $ativo);
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('nome_funcionario');
        }

        return $query;
    }

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'tipoCadastro');
    }
}
