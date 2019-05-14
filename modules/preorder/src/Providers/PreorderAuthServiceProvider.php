<?php

namespace Modules\Preorder\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Preorder\PreOrder;
use Modules\Admin\Privilege;

class PreorderAuthServiceProvider extends ServiceProvider
{
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->defineGates();
    }

    private function defineGates(): void
    {
        Gate::define('view-preorder', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view preorder')->value('id'));
        });

        Gate::define('create-preorder', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'create preorder')->value('id'));
        });

        Gate::define('edit-preorder', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit preorder')->value('id'));
        });

        Gate::define('view-transaction', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view transaction')->value('id'));
        });

        Gate::define('create-batch', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'create batch')->value('id'));
        });

        Gate::define('view-batch', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view batch')->value('id'));
        });

        Gate::define('edit-shipping', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit shipping')->value('id'));
        });

        Gate::define('send-reminder', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'send reminder')->value('id'));
        });
    }
}
