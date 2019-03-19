<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Modules\Admin\Policies\ManageUserPolicy;

class AuthServiceProvider extends ServiceProvider {

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
    public function boot() {
        $this->registerPolicies();

        $this->interceptGateChecks();
        $this->defineGates();
    }

    private function interceptGateChecks() {
        Gate::before(function ($admin) {
            if ($admin->id === 1) {
                return true;
            }
        });
    }

    private function defineGates() {
        Gate::define('add-user', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name','add user')->value('id'));
        });
        
        Gate::define('edit-user', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name','add user')->value('id'));
        });
        
        Gate::define('update-status-user', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name','enable/disable user')->value('id'));
        });
    }

}
