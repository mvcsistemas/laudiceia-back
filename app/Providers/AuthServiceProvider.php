<?php

namespace App\Providers;

  // use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use MVC\Models\User\User;
use MVC\Models\CadClinica\CadClinica;
use MVC\Models\CadClinicaPodologo\CadClinicaPodologo;
use MVC\Models\CadDepartamento\CadDepartamento;
use MVC\Models\CadFuncionario\CadFuncionario;
use MVC\Models\CadPodologo\CadPodologo;
use MVC\Policys\RolePermissionPolicy;

class AuthServiceProvider extends ServiceProvider {

      /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
          // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class               => RolePermissionPolicy::class,
        CadClinica::class         => RolePermissionPolicy::class,
        CadClinicaPodologo::class => RolePermissionPolicy::class,
        CadDepartamento::class    => RolePermissionPolicy::class,
        CadFuncionario::class     => RolePermissionPolicy::class,
        CadPodologo::class        => RolePermissionPolicy::class,
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
