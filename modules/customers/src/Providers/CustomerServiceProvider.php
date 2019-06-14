<?php

namespace Modules\Customers\Providers;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
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
    public function boot(RouteRegistrar $routeRegistrar, Factory $factory)
    {
        $this->loadBreadcrumbs();
        $this->loadConfig();
        $this->loadMigrations();
        $this->loadFactories($factory);
        $this->loadRoutes($routeRegistrar);
        $this->loadViews();
    }

    private function loadConfig(): void
    {
        $path = __DIR__ . '/../../config/customer.php';
        $this->mergeConfigFrom($path, 'customers');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('customer.php'),
            ], 'customers:config');
        }
    }

    private function loadMigrations(): void
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');
        }
    }

    private function loadFactories(Factory $factory): void
    {
        if ($this->app->runningInConsole()) {
            $factory->load(__DIR__ . '/../../database/factories');
        }
    }

    private function loadRoutes(RouteRegistrar $routeRegistrar): void
    {
        $routeRegistrar->prefix(config('admin.prefix', 'admin'))
            ->namespace('Modules\Customers\Http\Controllers')
            ->middleware(['web','auth:admin'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
            });
        $routeRegistrar->prefix('api-customer')
            ->namespace('Modules\Customers\Http\Controllers\Api')
            ->middleware(['api'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
            });
    }

    private function loadViews(): void
    {
        $path = __DIR__ . '/../../resources/views';
        $this->loadViewsFrom($path, 'customers');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/customers'),
            ], 'customers:views');
        }
    }

    private function loadBreadcrumbs(): void
    {
        if (class_exists('Breadcrumbs')) {
            require __DIR__ . '/../../routes/breadcrumbs.php';
        }
    }
}
