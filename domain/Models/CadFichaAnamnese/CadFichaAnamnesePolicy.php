<?php

namespace MVC\Models\CadFichaAnamnese;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CadFichaAnamnesePolicy
{
    use HandlesAuthorization;

    public function view(CadFichaAnamnese $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function create(CadFichaAnamnese $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function update(CadFichaAnamnese $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }

    public function delete(CadFichaAnamnese $example)
    {
        return $example->usu_admin ? Response::allow() : Response::deny('Sem permissão.');
    }
}
