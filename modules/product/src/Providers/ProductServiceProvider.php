<?php

namespace Modules\Product\Providers;

use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
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
        $this->publishPublicAssets();
    }

    private function loadConfig(): void
    {
        $path = __DIR__ . '/../../config/product.php';
        $this->mergeConfigFrom($path, 'product');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('product.php'),
            ], 'product:config');
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
            ->namespace('Modules\Product\Http\Controllers')
            ->middleware(['web','auth:admin'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
            });
        $routeRegistrar->prefix('api-product')
            ->namespace('Modules\Product\Http\Controllers')
            ->middleware(['api'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
            });
    }

    private function loadViews(): void
    {
        $path = __DIR__ . '/../../resources/views';
        $this->loadViewsFrom($path, 'product');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/product'),
            ], 'product:views');
        }
    }

    private function loadBreadcrumbs(): void
    {
        if (class_exists('Breadcrumbs')) {
            require __DIR__ . '/../../routes/breadcrumbs.php';
        }
    }

    private function publishPublicAssets(): void
    {
        if ($this->app->runningInConsole()) {
            $path = __DIR__.'/../../resources';
            $this->publishes([
                $path.'/vendor' => public_path('vendor/product/vendor'),
                $path.'/css' => public_path('vendor/product/css'),
                $path.'/js' => public_path('vendor/product/js'),
            ], 'product:public');
        }
    }
}
