<?php

namespace MVC\Rules;

use Illuminate\Contracts\Validation\Rule;

class DateFimRule implements Rule
{
    public function passes($attribute, $value)
    {
        $data_inicio = request()->data_inicio;

        return $value > $data_inicio;
    }

    public function message()
    {
        return 'A Data Fim deve ser maior que a Data Início';
    }
}
