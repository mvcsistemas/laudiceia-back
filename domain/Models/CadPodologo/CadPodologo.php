<?php

namespace MVC\Models\CadPodologo;

use MVC\Base\MVCModel;
use MVC\Models\User\User;
use YourAppRocks\EloquentUuid\Traits\HasUuid;

class CadPodologo extends MVCModel
{
    use HasUuid;

    protected $table      = 'cad_podologo';
    protected $primaryKey = 'id_podologo';
    protected $guarded    = [''];
    public    $timestamps = true;

    public static function boot()
    {
        parent::boot();

        self::created(function ($model) {
            $user = new User;
            $user->email = $model->email;
            $user->tipoCadastro()->associate($model);
            $user->save();
        });

        self::updated(function ($model) {
            $user = User::where('tipo_cadastro_type', 'MVC\Models\CadPodologo\CadPodologo')
                          ->where('tipo_cadastro_id', $model->id_podologo);

            $user->update(['email' => $model->email]);
        });

        self::deleted(function ($model) {
            $user = User::where('tipo_cadastro_type', 'MVC\Models\CadPodologo\CadPodologo')
                          ->where('tipo_cadastro_id', $model->id_podologo);

            $user->delete();
        });
    }

    public function index(){
        return $this->select('cad_podologo.*', 'cad_clinica.nome_clinica as nome_clinica')
                    ->join('cad_clinica', 'cad_clinica.id_clinica', 'cad_podologo.id_clinica');
    }

    public function lookup(array $params = [])
    {
        $rows = $this->select('id_podologo', 'nome_podologo');

        $this->filter($rows, $params);

        return $rows->get();
    }

    public function filter($query, array $params = [])
    {
        $id_podologo      = (int)($params['id_podologo'] ?? '');
        $uuid             = (string)($params['uuid'] ?? '');
        $nome_podologo    = (string)($params['nome_podologo'] ?? '');
        $email            = (string)($params['email'] ?? '');
        $telefone_interno = (string)($params['telefone_interno'] ?? '');
        $id_clinica       = (int)($params['id_clinica'] ?? '');
        $ativo            = (int)($params['ativo'] ?? 2);
        $tipo_ordenacao   = $params['tipo_ordenacao'] ?? '';
        $campo_ordenacao  = $params['campo_ordenacao'] ?? '';

        if ($id_podologo) {
            $query->where('cad_podologo.id_podologo', $id_podologo);
        }

        if ($uuid) {
            $query->where('cad_podologo.uuid', $uuid);
        }

        if ($nome_podologo) {
            $query->where('cad_podologo.nome_podologo', 'LIKE', "%{$nome_podologo}%");
        }

        if ($email) {
            $query->where('cad_podologo.email', 'LIKE', "%{$email}%");
        }

        if ($telefone_interno) {
            $query->where('cad_podologo.telefone_interno', 'LIKE', "%{$telefone_interno}%");
        }

        if ($id_clinica) {
            $query->where('cad_podologo.id_clinica', $id_clinica);
        }

        if (in_array($ativo, [0, 1])) {
            $query->where('cad_podologo.ativo', $ativo);
        }

        if ($tipo_ordenacao && $campo_ordenacao) {
            $query->orderBy($campo_ordenacao, $tipo_ordenacao);
        } else {
            $query->orderBy('cad_podologo.nome_podologo');
        }

        return $query;
    }

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'tipoCadastro');
    }
}
