<?php

namespace MVC\Models\CadClinica;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CadClinicaPolicy
{
    use HandlesAuthorization;

    public function view(CadClinica $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function create(CadClinica $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function update(CadClinica $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function delete(CadClinica $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }
}
