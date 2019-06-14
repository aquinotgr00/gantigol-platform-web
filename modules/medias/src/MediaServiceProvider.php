<?php

namespace Modules\Medias;

use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\RouteRegistrar as Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Factory;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;

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
        $this->loadBreadcrumbs();
        $this->loadViewComposers();
        $this->loadBladeAliases();
        $this->publishPublicAssets();
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
        $router->prefix(config('admin.prefix', 'admin'))
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
                $path => resource_path('views/vendor/media'),
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
    
    /**
     * Register breadcrumbs.
     * @return void
     */
    private function loadBreadcrumbs()
    {
        if (class_exists('Breadcrumbs')) {
            require __DIR__ . '/../routes/breadcrumbs.php';
        }
    }
    
    /**
     * Register View Composers
     * https://laravel.com/docs/5.7/views#view-composers
     * @return void
     */
    private function loadViewComposers()
    {
        View::composer('medias::media-gallery', 'Modules\Medias\Http\ViewComposers\MediaGalleryViewComposer');
        View::composer('medias::media-category', 'Modules\Medias\Http\ViewComposers\MediaCategoryViewComposer');
    }
    
    /**
     * Load Blade templates alias
     * https://laravel.com/docs/5.7/blade#including-sub-views | Aliasing Includes
     * @return void
     */
    private function loadBladeAliases(): void
    {
        Blade::include('medias::includes.media-library-modal', 'mediaLibraryModal');
        Blade::include('medias::includes.filter-media-by-category', 'filterMediaByCategory');
        Blade::component('medias::components.media-picker', 'mediaPicker');
    }
    
    private function publishPublicAssets(): void
    {
        if ($this->app->runningInConsole()) {
            $path = __DIR__.'/../resources';
            $this->publishes([
                $path.'/css' => public_path('vendor/media/css'),
                $path.'/js' => public_path('vendor/media/js'),
                $path.'/img' => public_path('vendor/media/img'),
            ], 'media:public');
        }
    }
}
