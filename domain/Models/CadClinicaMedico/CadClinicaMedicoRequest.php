<?php

namespace MVC\Models\CadClinicaMedico;

use MVC\Base\MVCRequest;

class CadClinicaMedicoRequest extends MVCRequest
{

    public function rules()
    {
        return [
            'id_clinica_medico' => '',
            'uuid' => '',
            'id_clinica' => 'required',
            'id_medico' => 'required',
            'telefone' => 'required',
            'whatsapp' => 'required',
            'created_at' => '',
            'updated_at' => '',
        ];
    }

    public function messages()
    {
        return [
            'id_clinica.required' => 'O campo Clínica é obrigatório.',
            'id_medico.required' => 'O campo Médico é obrigatório.',
            'telefone.required' => 'O campo Telefone é obrigatório.',
            'whatsapp.required' => 'O campo Whatsapp é obrigatório.',
        ];
    }
}
