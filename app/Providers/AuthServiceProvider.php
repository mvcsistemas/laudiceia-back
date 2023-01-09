<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use MVC\Models\User\User;
use MVC\Models\User\UserPolicy;
use MVC\Models\Example\Example;
use MVC\Models\Example\ExamplePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        User::class    => UserPolicy::class,
        Example::class => ExamplePolicy::class,
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
