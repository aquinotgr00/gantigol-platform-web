<?php

namespace Modules\Admin\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Modules\Admin\Http\Middleware\RedirectIfAuthenticated;
use Modules\Admin\Exceptions\ExceptionHandler as AdminHandler;

class AdminServiceProvider extends ServiceProvider
{
    
    /**
     * All of the container singletons that should be registered.
     *
     * @var array
     */
    public $singletons = [
        ExceptionHandler::class => AdminHandler::class,
    ];
    
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router, Factory $factory)
    {
        $this->loadHelper();
        $this->loadMigrations();
        $this->loadFactories($factory);
        $this->loadRoutes($router);
        $this->loadViews();
        $this->mergeAuthConfig();
        $this->aliasMiddlewares($router);
    }
    
    private function loadRoutes(Router $router)
    {
        $router->prefix(config('admin.prefix', 'admin'))
               ->namespace('Modules\Admin\Http\Controllers')
               ->middleware(['web'])
               ->group(function () {
                   $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
               });
    }
    
    private function loadViews()
    {
        $path = __DIR__.'/../../resources/views';
        $this->loadViewsFrom($path, 'admin');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/admin'),
            ], 'admin:views');
        }
    }
    
    private function mergeAuthConfig()
    {
        $default = config('auth', []);
        $custom = require __DIR__ . '/../../config/auth.php';
        
        $auth = merge_config($default, $custom);
        
        config(['auth'=>$auth]);
    }
    
    private function aliasMiddlewares(Router $router)
    {
        $router->aliasMiddleware('admin_guest', RedirectIfAuthenticated::class);
    }
    
    private function loadMigrations()
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        }
    }
    
    private function loadFactories(Factory $factory)
    {
        if ($this->app->runningInConsole()) {
            $factory->load(__DIR__.'/../../database/factories');
        }
    }
    
    private function loadHelper()
    {
        $file = __DIR__.'/../helper.php';
        if (file_exists($file)) {
            require_once($file);
        }
    }
    
}
