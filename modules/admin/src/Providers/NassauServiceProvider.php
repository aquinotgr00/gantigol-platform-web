<?php

namespace Modules\Admin\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class NassauServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadBladeAliases();
    }

    private function loadBladeAliases(): void
    {
        Blade::include('admin::includes-nassau.content', 'contentNassau');
        Blade::include('admin::includes-nassau.sidebar', 'sidebarNassau');
        Blade::include('admin::includes-nassau.sidebar-divider', 'sidebarDividerNassau');
        Blade::include('admin::includes-nassau.sidebar-toggler', 'sidebarTogglerNassau');
        Blade::include('admin::includes-nassau.topbar', 'topbarNassau');
        Blade::include('admin::includes-nassau.topbar-sidebar-toggler', 'topbarSidebarTogglerNassau');
        Blade::include('admin::includes-nassau.topbar-search', 'topbarSearchNassau');
        Blade::include('admin::includes-nassau.topbar-navbar', 'topbarNavbarNassau');
        Blade::include('admin::includes-nassau.scroll-to-top', 'scrollToTopNassau');
        Blade::include('admin::includes-nassau.footer', 'footerNassau');
        Blade::include('admin::includes-nassau.small-round-button', 'smallRoundButtonNassau');
    }
}