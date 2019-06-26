<?php

namespace Modules\Ecommerce\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Admin\Privilege;

class EcommerceAuthServiceProvider extends ServiceProvider
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
        Gate::define('view-paid-order', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view paid order')->value('id'));
        });

        Gate::define('view-order-transaction', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view order transaction')->value('id'));
        });

        Gate::define('edit-order-customer', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit order customer')->value('id'));
        });

        Gate::define('edit-order-shipping-info', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit order shipping info')->value('id'));
        });

        Gate::define('edit-order-shipping-details', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit order shipping details')->value('id'));
        });
    }
}
