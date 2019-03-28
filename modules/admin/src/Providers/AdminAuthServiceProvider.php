<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Modules\Admin\Policies\ManageUserPolicy;

class AdminAuthServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Admin::class => ManageUserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        $this->interceptGateChecks();
        $this->defineGates();
    }

    private function interceptGateChecks(): void
    {
        Gate::before(function ($admin) {
            if ($admin->id === 1) {
                return true;
            }
        });
    }

    private function defineGates(): void
    {
        Gate::define('view-users', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view users')->value('id'));
        });
        
        Gate::define('add-user', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'add user')->value('id'));
        });
        
        Gate::define('edit-user', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit user')->value('id'));
        });
        
        Gate::define('update-status-user', function ($admin, $user) {
            $privilegeId = Privilege::where('name', 'enable/disable user')->value('id');
            return $admin->id!==$user->id && $admin->privileges->contains('privilege_id', $privilegeId);
        });
        
        Gate::define('edit-user-privileges', function ($admin, $user) {
            $privilegeId = Privilege::where('name', 'edit user privileges')->value('id');
            return !$user->id || ($admin->id!==$user->id && $admin->privileges->contains('privilege_id', $privilegeId));
        });
    }
}
