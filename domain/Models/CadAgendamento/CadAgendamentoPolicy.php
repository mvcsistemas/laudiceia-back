<?php

namespace MVC\Models\CadAgendamento;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CadAgendamentoPolicy
{
    use HandlesAuthorization;

    public function view(CadAgendamento $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function create(CadAgendamento $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function update(CadAgendamento $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function delete(CadAgendamento $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }
}
