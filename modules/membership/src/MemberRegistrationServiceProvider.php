<?php

namespace Modules\Membership;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
use Illuminate\Database\Eloquent\Factory;
use Laravel\Passport\Passport;
use Illuminate\Support\Facades\Route;

class MemberRegistrationServiceProvider extends ServiceProvider
{
    public function register()
    {
        
    }

    public function boot(Router $router, Factory $factory)
    {
        $this->loadConfig();
        $this->loadRoutes($router);
        $this->loadViews();
        $this->loadMigrationsAndFactories($factory);
        $this->mergeAuthConfig();

        Passport::routes();
    }

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

    private function loadRoutes(Router $router)
    {
        $router->prefix(config('member.prefix', 'member'))
               ->namespace('Modules\Membership\Http\Controllers')
               ->group(function () {
                   $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
               });
    }

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

    private function loadMigrationsAndFactories(Factory $factory)
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

            $factory->load(__DIR__.'/../database/factories');
        }
    }

    private function mergeAuthConfig()
    {
        $original = $this->app['config']->get('auth', []);
        $toMerge = require __DIR__ . '/../config/auth.php';

        $auth = [];
        foreach ($original as $key => $value) {
            if (isset($toMerge[$key])) {
                $auth[$key] = array_merge($value, $toMerge[$key]);
            } else {
                $auth[$key] = $value;
            }
        }

        $this->app['config']->set('auth', $auth);
    }
}

