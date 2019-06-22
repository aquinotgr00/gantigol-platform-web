<?php

namespace Modules\Admin\Providers;

use Illuminate\Routing\Router;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\Facades\Blade;
use Modules\Admin\Http\Middleware\RedirectIfAuthenticated;
use Modules\Admin\Exceptions\ExceptionHandler as AdminHandler;

class AdminServiceProvider extends ServiceProvider
{
    private $bladeNassauIncludes = [
        'content',
        'sidebar',
        'sidebarDivider',
        'sidebarToggler',
        'topbar',
        'topbarSidebarToggler',
        'topbarSearch',
        'topbarNavbar',
        'scrollToTop',
        'footer',
        'smallRoundButton'
    ];
    
    private $bladeIncludes = [
        'searchbar',
        'addNewButton',
        'pageHeader',
        'sidebarNavItem',
        'useDatatables'
        'sidebarSubmenuNav'
    ];
    
    private $bladeComponents = ['modal','toast','indexPage','table'];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ExceptionHandler::class, AdminHandler::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(RouteRegistrar $routeRegistrar, Router $router, Factory $factory)
    {
        $this->aliasMiddlewares($router);
        $this->loadBladeAliases();
        $this->loadBreadcrumbs();
        $this->loadConfig();
        $this->loadHelper();
        $this->loadFactories($factory);
        $this->loadMigrations();
        $this->loadRoutes($routeRegistrar);
        $this->loadViews();
        $this->mergeAuthConfig();
        
        $this->publishPublicAssets();
    }
    
    private function loadConfig(): void
    {
        $path = __DIR__.'/../../config/admin.php';
        $this->mergeConfigFrom($path, 'admin');
        
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('admin.php'),
            ], 'admin:config');
        }
    }
    
    private function loadRoutes(RouteRegistrar $routeRegistrar): void
    {
        $routeRegistrar->prefix(config('admin.prefix', 'admin'))
               ->namespace('Modules\Admin\Http\Controllers')
               ->middleware(['web'])
               ->group(function () {
                    $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');
               });
    }
    
    private function loadViews(): void
    {
        $path = __DIR__.'/../../resources/views';
        $this->loadViewsFrom($path, 'admin');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => resource_path('views/vendor/admin'),
            ], 'admin:views');
        }
    }
    
    private function mergeAuthConfig(): void
    {
        $default = config('auth', []);
        $custom = require __DIR__ . '/../../config/auth.php';
        
        $auth = merge_config($default, $custom);
        
        config(['auth'=>$auth]);
    }
    
    private function aliasMiddlewares(Router $router): void
    {
        $router->aliasMiddleware('admin_guest', RedirectIfAuthenticated::class);
    }
    
    private function loadMigrations(): void
    {
        if ($this->app->runningInConsole()) {
            $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
        }
    }
    
    private function loadFactories(Factory $factory): void
    {
        if ($this->app->runningInConsole()) {
            $factory->load(__DIR__.'/../../database/factories');
        }
    }
    
    private function loadHelper(): void
    {
        $file = __DIR__.'/../helper.php';
        if (file_exists($file)) {
            require_once($file);
        }
    }
    
    private function publishPublicAssets(): void
    {
        if ($this->app->runningInConsole()) {
            $path = __DIR__.'/../../resources';
            $this->publishes([
                $path.'/js' => public_path('vendor/admin/js'),
                $path.'/css' => public_path('vendor/admin/css'),
                $path.'/images' => public_path('vendor/admin/images'),
                $path.'/vendor' => public_path('vendor/admin/vendor'),
            ], 'admin:public');
        }
    }
    
    private function loadBladeAliases(): void
    {
        foreach($this->bladeComponents as $component) {
            Blade::component('admin::components.'.Str::kebab($component), $component);
        }
        
        foreach($this->bladeNassauIncludes as $include) {
            Blade::include('admin::includes-nassau.'.Str::kebab($include), $include.'Nassau');
        }
        
        foreach($this->bladeIncludes as $include) {
            Blade::include('admin::includes.'.Str::kebab($include), $include);
        }
    }
    
    private function loadBreadcrumbs(): void
    {
        config(['breadcrumbs.view'=>'admin::components.breadcrumbs']);
        
        if (class_exists('Breadcrumbs')) {
            require __DIR__ . '/../../routes/breadcrumbs.php';
        }
    }
}
