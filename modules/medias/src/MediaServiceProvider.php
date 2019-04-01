<?php

namespace Modules\Medias;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\RouteRegistrar as Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Factory;

class MediaServiceProvider extends ServiceProvider
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
        $this->loadConfig();
        $this->loadRoutes($router);
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
        $path = __DIR__.'/../config/medias.php';
        $this->mergeConfigFrom($path, 'medias');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('medias.php'),
            ], 'medias:config');
        }
    }

     /**
     * Register any load routes.
     * @return void
     */
    private function loadRoutes(Router $router)
    {
        $router->prefix(config('medias.prefix', 'medias'))
               ->namespace('Modules\Medias\Http\Controllers')
               ->middleware(['web'])
               ->group(function () {
                   $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
               });
    }

    /**
     * Register any load view.
     *
     * @return void
     */
    private function loadViews()
    {
        $path = __DIR__.'/../resources/views';
        $this->loadViewsFrom($path, 'medias');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/admins'),
            ], 'medias:views');
        }
    }

     /**
     * Register any load migrations & factories from module membership.
     *
     * @return void
     */
    private function loadMigrationsAndFactories(Factory $factory)
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

            $factory->load(__DIR__.'/../database/factories');
        }
    }
}
