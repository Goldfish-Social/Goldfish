<?php

namespace App\Providers;

use App\Models\Team;
use App\Policies\PostPolicy;
use App\Policies\ReplyPolicy;
use App\Policies\TeamPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Team::class => TeamPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('delete-post', [PostPolicy::class, 'destroy']);
        Gate::define('delete-reply', [ReplyPolicy::class, 'destroy']);
    }
}
