<?php

namespace Modules\Report\Providers;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\RouteRegistrar as Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Factory;

class ReportServiceProvider extends ServiceProvider
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
        $path = __DIR__.'/../../config/report.php';
        $this->mergeConfigFrom($path, 'report');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('report.php'),
            ], 'reports:config');
        }
    }

     /**
     * Register any load routes.
     * @return void
     */
    private function loadRoutes(Router $router)
    {
        $router->prefix(config('report.prefix', 'report'))
               ->namespace('Modules\Report\Http\Controllers')
               ->middleware(['web','auth:admin'])
               ->group(function () {
                   $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
               });
    }

    /**
     * Register any load view.
     *
     * @return void
     */
    private function loadViews()
    {
        $path = __DIR__.'/../../resources/views';
        $this->loadViewsFrom($path, 'report');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/report'),
            ], 'report:views');
        }
    }

     /**
     * Register any load migrations & factories from module Report.
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
     * Publish asset  from module Report.
     *
     * @return void
     */
    private function publishPublicAssets(): void
    {
        if ($this->app->runningInConsole()) {
            $path = __DIR__.'/../../resources';
            $this->publishes([
                $path.'/vendor' => public_path('vendor/report/vendor'),
                $path.'/css' => public_path('vendor/report/css'),
                $path.'/js' => public_path('vendor/report/js'),
            ], 'report:public');
        }
    }
}
