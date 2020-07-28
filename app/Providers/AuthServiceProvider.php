<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {

        //geti la kuangalia user kama ni admin
        Gate::define('isAdmin', function ($user) {
            $user->hasRole('admin');
        });

        //geti la kuangalia user kama ni supervisor
        Gate::define('isSupervisor', function ($user) {
            $user->hasRole('supervisor');
        });

        //geti la kuangalia user kama ni admin
        Gate::define('isStudent', function ($user) {
            $user->hasRole('student');
        });

         //geti la kuangalia user kama ni admin
         Gate::define('isChallengeOwner', function ($user) {
            $user->hasRole('challengeOwner');
        });




        $this->registerPolicies();

        //
    }
}
