<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use App\Models\Role;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('is_admin', fn () => auth()->user()->role_id == Role::IS_ADMIN);
        Gate::define('is_student', fn () => auth()->user()->role_id == Role::IS_STUDENT);
    }
}
