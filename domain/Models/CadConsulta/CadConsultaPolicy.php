<?php

namespace MVC\Models\CadConsulta;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CadConsultaPolicy
{
    use HandlesAuthorization;

    public function view(CadConsulta $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function create(CadConsulta $example)
    {
        return $example->usu_admin ? Response::allow(): Response::deny('Sem permissão.');
    }

    public function update(CadConsulta $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function delete(CadConsulta $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }
}
