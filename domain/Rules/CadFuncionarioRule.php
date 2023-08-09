<?php

namespace MVC\Rules;

use Illuminate\Contracts\Validation\Rule;
use MVC\Models\CadFuncionario\CadFuncionario;

class CadFuncionarioRule implements Rule
{
    public function passes($attribute, $value)
    {
        $method = request()->method();

        if($method !== 'PUT'){
            return true;
        }

        $funcionario = CadFuncionario::where('email', $value)
                                        ->where('uuid', '<>', request()->uuid)
                                        ->first();

        if($funcionario){
            return false;
        }

        return true;
    }

    public function message()
    {
        return 'O campo email já está sendo utilizado.';
    }
}
