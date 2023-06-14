<?php

namespace MVC\Policys\RolePolicy;

use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;
use MVC\Models\User\User;

class RolePolicy
{
    use HandlesAuthorization;

    public function view(User $user)
    {
        return $user->tipo_cadastro == 'M' ? Response::allow(): Response::deny('Sem permissão.');
    }

    public function create(User $user)
    {
        return $user->tipo_cadastro == 'M' ? Response::allow(): Response::deny('Sem permissão.');
    }

    public function update(User $user)
    {
        return $user->tipo_cadastro == 'M' ? Response::allow(): Response::deny('Sem permissão.');
    }

    public function delete(User $user)
    {
        return $user->tipo_cadastro == 'M' ? Response::allow(): Response::deny('Sem permissão.');
    }
}
