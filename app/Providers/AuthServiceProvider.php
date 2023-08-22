<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Activity;
use App\Models\Enum\RoleAccessibility;
use App\Models\User;
use App\Policies\EventOrganizePolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Activity::class => EventOrganizePolicy::class,
        User::class => UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('staff', function (User $user) {
            return $user->role === RoleAccessibility::STAFF;
        });
    }
}
