<?php

namespace Modules\Banners\Providers;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\RouteRegistrar as Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Factory;

class BannerServiceProvider extends ServiceProvider
{

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(Router $router, Factory $factory)
    {   
        $this->loadBreadcrumbs();
        $this->loadConfig();
        $this->loadRoutes($router);
        $this->loadRoutesApi($router);
        $this->loadViews();
        $this->loadMigrationsAndFactories($factory);
    }

    /**
     * Register any load config.
     *
     * @return void
     */
    private function loadConfig()
    {
        $path = __DIR__.'/../../config/banners.php';
        $this->mergeConfigFrom($path, 'banners');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('banners.php'),
            ], 'banners:config');
        }
    }

     /**
     * Register any load routes.
     * @return void
     */
    private function loadRoutes(Router $router)
    {
        $router->prefix(config('banners.prefix', 'banners'))
               ->namespace('Modules\Banners\Http\Controllers')
               ->middleware(['web','auth:admin'])
               ->group(function () {
                   $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
               });
    }
    /**
     * Register API  routes.
     */
    private function loadRoutesApi(Router $router): void
    {
         $router->prefix(config('banners.api', 'api/banners'))
               ->namespace('Modules\Banners\Http\Controllers')
               ->middleware(['api'])
               ->group(function () {
                   $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
               });
    }
    /**
     * Register any load view Banner.
     *
     * @return void
     */
    private function loadViews()
    {
        $path = __DIR__.'/../../resources/views';
        $this->loadViewsFrom($path, 'banners');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/banner'),
            ], 'banners:views');
        }
    }

     /**
     * Register any load migrations & factories from module Banner.
     *
     * @return void
     */
    private function loadMigrationsAndFactories(Factory $factory)
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');

            $factory->load(__DIR__.'/../../database/factories');
        }
    }
    /**
     * Register Breadcrumb page from module Banner.
     *
     * @return void
     */
    private function loadBreadcrumbs(): void
    {
        if (class_exists('Breadcrumbs')) {
            require __DIR__ . '/../../routes/breadcrumbs.php';
        }
    }

    /**
     * Publish asset  from module Banner.
     *
     * @return void
     */
    private function publishPublicAssets(): void
    {
        if ($this->app->runningInConsole()) {
            $path = __DIR__.'/../../resources';
            $this->publishes([
                $path.'/vendor' => public_path('vendor/banner/vendor'),
                $path.'/css' => public_path('vendor/banner/css'),
                $path.'/js' => public_path('vendor/banner/js'),
            ], 'banners:public');
        }
    }
}
