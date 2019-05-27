<?php

namespace Modules\Shipment\Providers;

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\ServiceProvider;


class ShipmentServiceProvider extends ServiceProvider
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
        $path = __DIR__ . '/../../config/shipment.php';
        $this->mergeConfigFrom($path, 'shipment');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('shipment.php'),
            ], 'shipment:config');
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
        $routeRegistrar->prefix(config('shipment.prefix', 'shipment'))
            ->namespace('Modules\Shipment\Http\Controllers')
            ->middleware(['web'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
            });

        $routeRegistrar->prefix(config('shipment.prefix', 'shipment'))
            ->namespace('Modules\Shipment\Http\Controllers')
            ->middleware(['api'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
            });
    }

    private function loadViews(): void
    {
        $path = __DIR__ . '/../../resources/views';
        $this->loadViewsFrom($path, 'shipment');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/shipment'),
            ], 'shipment:views');
        }
    }
}
