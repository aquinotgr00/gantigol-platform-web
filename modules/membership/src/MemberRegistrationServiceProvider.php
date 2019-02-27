<?php

namespace Modules\Membership;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\RouteRegistrar as Router;
use Illuminate\Database\Eloquent\Factory;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Route;

class MemberRegistrationServiceProvider extends ServiceProvider
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
        $this->mergeAuthConfig();

        Passport::routes();
    }

    /**
     * Register any load config.
     *
     * @return void
     */
    private function loadConfig()
    {
        $path = __DIR__.'/../config/member.php';
        $this->mergeConfigFrom($path, 'member');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('member.php'),
            ], 'member:config');
        }
    }

     /**
     * Register any load routes.
     */
    private function loadRoutes(Router $router): void
    {
        $router->prefix(config('member.prefix', 'member'))
               ->namespace('Modules\Membership\Http\Controllers')
               ->group(function () {
                   $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
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
        $this->loadViewsFrom($path, 'membership');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/modules/membership'),
            ], 'membership:views');
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

     /**
     * Merger any auth config from module membership.
     *
     * @return void
     */
    private function mergeAuthConfig()
    {
        /** @var \Illuminate\Config\Repository */
        $config = $this->app['config'];

        $original = $config->get('auth', []);
        $toMerge = require __DIR__ . '/../config/auth.php';

        $auth = [];
        foreach ($original as $key => $value) {
            $auth[$key] = $value;
            if (isset($toMerge[$key])) {
                $auth[$key] = array_merge($value, $toMerge[$key]);
            }
        }

        $config->set('auth', $auth);
    }
}
