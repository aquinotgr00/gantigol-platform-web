<?php

namespace Modules\Preorder\Providers;

use Illuminate\Database\Eloquent\Factory;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\ServiceProvider;
use Modules\Preorder\Console\Commands\SendPaymentReminders;

class PreOrderServiceProvider extends ServiceProvider
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
        $this->loadCommands();
        $this->publishPublicAssets();
    }

    private function loadConfig(): void
    {
        $path = __DIR__ . '/../../config/preorder.php';
        $this->mergeConfigFrom($path, 'preorder');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('preorder.php'),
            ], 'preorder:config');
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
            ->namespace('Modules\Preorder\Http\Controllers')
            ->middleware(['web'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');
            });
        $routeRegistrar->prefix('api-preorder')
            ->namespace('Modules\Preorder\Http\Controllers')
            ->middleware(['api'])
            ->group(function () {
                $this->loadRoutesFrom(__DIR__ . '/../../routes/api.php');
            });
    }

    private function loadViews(): void
    {
        $path = __DIR__ . '/../../resources/views';
        $this->loadViewsFrom($path, 'preorder');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/preorder'),
            ], 'preorder:views');
        }
    }

    private function loadBreadcrumbs(): void
    {
        if (class_exists('Breadcrumbs')) {
            require __DIR__ . '/../../routes/breadcrumbs.php';
        }
    }

    private function loadCommands(): void
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SendPaymentReminders::class,
            ]);
        }
    }

    private function publishPublicAssets(): void
    {
        if ($this->app->runningInConsole()) {
            $path = __DIR__ . '/../../resources';
            $this->publishes([
                $path . '/js' => public_path('vendor/preorder/js'),
                $path . '/images' => public_path('vendor/preorder/images'),
                $path . '/css' => public_path('vendor/preorder/css'),
            ], 'preorder:public');
        }
    }
}
