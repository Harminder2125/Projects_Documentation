<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
         'App\Models\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        

        $this->registerPolicies();
        
                // Should return TRUE or FALSE
        Gate::define('is_admin', function(User $user) {
            return $user->role_id == 2;
        });
        Gate::define('manage_users', function(User $user) {
            return $user->role_id == 2;
        });
         Gate::define('transfer_projects', function(User $user) {
            return $user->role_id == 2;
        });
        

        //
    }
}
