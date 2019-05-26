<?php

namespace Modules\Ecommerce\Providers;

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\ServiceProvider;

class EcommerceServiceProvider extends ServiceProvider
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
        $path = __DIR__ . '/../../config/ecommerce.php';
        $this->mergeConfigFrom($path, 'ecommerce');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('ecommerce.php'),
            ], 'ecommerce:config');
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
        $routeRegistrar->prefix('api-ecommerce')
            ->namespace('Modules\Ecommerce\Http\Controllers\Api')
            ->middleware(['api'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
            });
    }

    private function loadViews(): void
    {
        $path = __DIR__ . '/../../resources/views';
        $this->loadViewsFrom($path, 'ecommerce');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/ecommerce'),
            ], 'ecommerce:views');
        }
    }
}
