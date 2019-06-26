<?php

namespace Modules\Product\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Admin\Privilege;

class ProductAuthServiceProvider extends ServiceProvider
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
        Gate::define('create-product', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'create product')->value('id'));
        });

        Gate::define('view-product', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view product')->value('id'));
        });

        Gate::define('edit-product', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit product')->value('id'));
        });

        Gate::define('create-variant', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'create variant')->value('id'));
        });

        Gate::define('view-variant', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view variant')->value('id'));
        });

        Gate::define('edit-variant', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit variant')->value('id'));
        });

        Gate::define('create-size-chart', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'create size chart')->value('id'));
        });

        Gate::define('edit-size-chart', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit size chart')->value('id'));
        });

        Gate::define('view-size-chart', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view size chart')->value('id'));
        });

        Gate::define('set-visible', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'set visible')->value('id'));
        });

        Gate::define('set-adjustment', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'set adjustment')->value('id'));
        });

        Gate::define('create-product-category', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'create product category')->value('id'));
        });

        Gate::define('view-product-category', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view product category')->value('id'));
        });

        Gate::define('edit-product-category', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit product category')->value('id'));
        });

        Gate::define('delete-size-chart', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'delete size chart')->value('id'));
        });

        Gate::define('delete-variant', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'delete variant')->value('id'));
        });
    }
}
