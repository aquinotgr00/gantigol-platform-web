<?php

namespace Modules\Banners\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Modules\Banners\Policies\ManageBannerPolicy;
use Modules\Banners\Policies\ManageCategoryBannerPolicy;

class BannerAuthServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Admin::class => ManageBannerPolicy::class,
        Admin::class => ManageCategoryBannerPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();

        $this->interceptGateChecks();
        $this->defineGates();
    }

    private function interceptGateChecks(): void
    {
        Gate::before(function ($admin) {
            if ($admin->id === 1) {
                return true;
            }
        });
    }

    private function defineGates(): void
    {
        Gate::define('view-banner', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view banner')->value('id'));
        });
        
        Gate::define('add-banner', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'add banner')->value('id'));
        });
        
        Gate::define('edit-banner', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit banner')->value('id'));
        });
        Gate::define('view-category-banner', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view category banner')->value('id'));
        });
        
        Gate::define('add-category-banner', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'add category banner')->value('id'));
        });
        
        Gate::define('edit-category-banner', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit category banner')->value('id'));
        });
        

    }
}
