<?php

namespace MVC\Models\CadClinicaPodologo;

use MVC\Base\MVCRequest;

class CadClinicaPodologoRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'id_clinica_podologo' => '',
            'uuid'                => '',
            'id_clinica'          => 'required',
            'id_podologo'         => 'required',
            'telefone'            => 'required',
            'whatsapp'            => 'required',
            'created_at'          => '',
            'updated_at'          => '',
        ];
    }

    public function messages()
    {
        return [
            'id_clinica.required'  => 'O campo Clínica é obrigatório.',
            'id_podologo.required' => 'O campo Médico é obrigatório.',
            'telefone.required'    => 'O campo Telefone é obrigatório.',
            'whatsapp.required'    => 'O campo Whatsapp é obrigatório.',
        ];
    }
}
