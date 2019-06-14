<?php

namespace Modules\Inventory\Providers;

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\ServiceProvider;

class InventoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(RouteRegistrar $routeRegistrar)
    {
        $this->loadConfig();
        $this->loadMigrations();
        $this->loadRoutes($routeRegistrar);
        $this->loadViews();
    }

    private function loadConfig(): void
    {
        $path = __DIR__ . '/../../config/inventory.php';
        $this->mergeConfigFrom($path, 'inventory');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('inventory.php'),
            ], 'inventory:config');
        }
    }

    private function loadMigrations(): void
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        }
    }

    private function loadRoutes(RouteRegistrar $routeRegistrar): void
    {
        $routeRegistrar->prefix(config('admin.prefix', 'admin'))
            ->namespace('Modules\Inventory\Http\Controllers')
            ->middleware(['web', 'auth:admin'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
            });
    }

    private function loadViews(): void
    {
        $path = __DIR__ . '/../../resources/views';
        $this->loadViewsFrom($path, 'inventory');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/inventory'),
            ], 'inventory:views');
        }
    }
}
