<?php

namespace MVC\Models\CadConsulta\CadConsultaImagem;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class CadConsultaImagemPolicy
{
    use HandlesAuthorization;

    public function view(CadConsultaImagem $user)
    {
        return $user->usu_admin == 1 ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }

    public function create(CadConsultaImagem $user)
    {
        return $user->usu_admin == 1 ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }

    public function update(CadConsultaImagem $user)
    {
        return $user->usu_admin == 1 ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }

    public function delete(CadConsultaImagem $user)
    {
        return $user->usu_admin == 1 ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }
}
