<?php

namespace Modules\ProductManagement\Providers;

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\ServiceProvider;

class ProductManagementServiceProvider extends ServiceProvider
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
        $this->loadBreadcrumbs();
        $this->loadConfig();
        $this->loadMigrations();
        $this->loadRoutes($routeRegistrar);
        $this->loadViews();
    }

    private function loadConfig(): void
    {
        $path = __DIR__ . '/../../config/product_management.php';
        $this->mergeConfigFrom($path, 'product_management');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('product_management.php'),
            ], 'product_management:config');
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
            ->namespace('Modules\ProductManagement\Http\Controllers')
            ->middleware(['web'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
            });
    }

    private function loadViews(): void
    {
        $path = __DIR__ . '/../../resources/views';
        $this->loadViewsFrom($path, 'product_management');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/product_management'),
            ], 'product_management:views');
        }
    }

    private function loadBreadcrumbs(): void
    {
        if (class_exists('Breadcrumbs')) {
            require __DIR__ . '/../../routes/breadcrumbs.php';
        }
    }
}
