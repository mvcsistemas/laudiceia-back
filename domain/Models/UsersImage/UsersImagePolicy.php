<?php

namespace CRM\Models\UsersImage;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UsersImagePolicy
{
    use HandlesAuthorization;

    public function view(UsersImage $user)
    {
        return $user->usu_admin == 1 ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }

    public function create(UsersImage $user)
    {
        return $user->usu_admin == 1 ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }

    public function update(UsersImage $user)
    {
        return $user->usu_admin == 1 ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }

    public function delete(UsersImage $user)
    {
        return $user->usu_admin == 1 ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }
}
