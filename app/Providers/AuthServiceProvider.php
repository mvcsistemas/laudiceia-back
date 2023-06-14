<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use MVC\Models\User\User;
use MVC\Models\User\UserPolicy;
use MVC\Models\Example\Example;
use MVC\Models\Example\CadMedicoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use MVC\Models\CadClinica\CadClinica;
use MVC\Policys\RolePolicy\RolePolicy;

class AuthServiceProvider extends ServiceProvider {

    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class    => UserPolicy::class,
        CadClinica::class =>  RolePolicy::class,
        Example::class => CadMedicoPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
    }
}
