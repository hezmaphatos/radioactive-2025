<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('superadmin', function(User $user){
            return $user->role_id == 1;
        });

        Gate::define('admin', function(User $user){
            return in_array($user->role_id, [1, 2]);
        });

        Gate::define('acara', function(User $user){
            return in_array($user->role_id, [1, 2, 4]);
        });
        
        Gate::define('keuangan', function(User $user){
            return in_array($user->role_id, [1, 2, 6]);
        });        
    }
}
