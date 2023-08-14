<?php

namespace MVC\Rules;

use Illuminate\Contracts\Validation\Rule;
use MVC\Models\User\User;
use MVC\Models\CadFuncionario\CadFuncionario;

class CadFuncionarioRule implements Rule
{
    public function passes($attribute, $value)
    {
        $funcionario = CadFuncionario::findByUuid(request()->uuid);

        $user_funcionario = User::where('email', $value)
                            ->where('tipo_cadastro_type', 'MVC\Models\CadFuncionario\CadFuncionario')
                            ->where('tipo_cadastro_id', '<>', $funcionario->id_funcionario)
                            ->first();

        $user_podologo = User::where('email', $value)
                            ->where('tipo_cadastro_type', 'MVC\Models\CadPodologo\CadPodologo')
                            ->where('tipo_cadastro_id', '<>', $funcionario->id_funcionario)
                            ->first();

        if($user_funcionario || $user_podologo){
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'O campo email já está sendo utilizado.';
    }
}
