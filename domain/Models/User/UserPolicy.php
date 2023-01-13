<?php

namespace MVC\Models\User;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class UserPolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
        return $user->tipo_cadastro == 'M' ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }

    public function create(User $user)
    {
        return $user->tipo_cadastro == 'M' ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }

    public function update(User $user)
    {
        return $user->tipo_cadastro == 'M' ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }

    public function delete(User $user)
    {
        return $user->tipo_cadastro == 'M' ? Response::allow() : Response::deny('Você não tem permissão para executar essa ação.');
    }
}
