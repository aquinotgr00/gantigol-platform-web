<?php

namespace Modules\Admin\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\Facades\Blade;
use Modules\Admin\Http\Middleware\RedirectIfAuthenticated;
use Modules\Admin\Exceptions\ExceptionHandler as AdminHandler;
use Illuminate\Support\Facades\Response;

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
        $this->aliasMiddlewares($router);
        $this->loadBladeAliases();
        $this->loadBreadcrumbs();
        $this->loadConfig();
        $this->loadHelper();
        $this->loadFactories($factory);
        $this->loadMigrations();
        $this->loadRoutes($router);
        $this->loadViews();
        $this->mergeAuthConfig();
        
        $this->publishPublicAssets();
        
    }
    
    private function loadConfig()
    {
        $path = __DIR__.'/../../config/admin.php';
        $this->mergeConfigFrom($path, 'admin');
        
        if ($this->app->runningInConsole()) {
            $this->publishes([
                $path => config_path('admins.php'),
            ], 'admin:config');
        }
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
    
    private function publishPublicAssets()
    {
        if ($this->app->runningInConsole()) {
            $path = __DIR__.'/../../resources';
            $this->publishes([
                $path.'/js' => public_path('vendor/admin/js'),
                $path.'/css' => public_path('vendor/admin/css'),
            ], 'admin:public');
        }
    }
    
    private function loadBladeAliases()
    {
        Blade::component('admin::components.modal', 'modal');
        Blade::component('admin::components.page-heading', 'pageHeading');
        Blade::component('admin::components.toast', 'toast');
        
        Blade::include('admin::includes.content', 'content');
        Blade::include('admin::includes.sidebar', 'sidebar');
        Blade::include('admin::includes.sidebar-divider', 'sidebarDivider');
        Blade::include('admin::includes.sidebar-toggler', 'sidebarToggler');
        Blade::include('admin::includes.topbar', 'topbar');
        Blade::include('admin::includes.topbar-sidebar-toggler', 'topbarSidebarToggler');
        Blade::include('admin::includes.topbar-search', 'topbarSearch');
        Blade::include('admin::includes.topbar-navbar', 'topbarNavbar');
        Blade::include('admin::includes.scroll-to-top', 'scrollToTop');
        Blade::include('admin::includes.footer', 'footer');
        Blade::include('admin::includes.small-round-button', 'smallRoundButton');
    }
    
    private function loadBreadcrumbs()
    {
        config(['breadcrumbs.view'=>'admin::components.breadcrumbs']);
        
        if (class_exists('Breadcrumbs')) {
            require __DIR__ . '/../../routes/breadcrumbs.php';
        }
    }
}
