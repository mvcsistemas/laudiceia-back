<?php

namespace MVC\Models\CadPaciente;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CadPacientePolicy
{
    use HandlesAuthorization;

    public function view(CadPaciente $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function create(CadPaciente $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function update(CadPaciente $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function delete(CadPaciente $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }
}
