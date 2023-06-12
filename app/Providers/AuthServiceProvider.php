<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::before(function (User $user, $ability) {
            if ($user->isSupport() or $user->isAdmin()) {
                return true;
            }
        });

        Gate::before(function (User $user, $ability) {
            return $user->hasPermissionTo($ability);
            /*if (Permission::existsOnCache($ability)) {
                return $user->hasPermissionTo($ability);
            }*/
        });
    }
}
