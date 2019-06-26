<?php

namespace Modules\Promo\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Modules\Promo\Policies\ManagePromoPolicy;

class PromoAuthServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Admin::class => ManagePromoPolicy::class,
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
        Gate::define('view-promo', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view promo')->value('id'));
        });
        
        Gate::define('add-promo', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'add promo')->value('id'));
        });
        
        Gate::define('edit-promo', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit promo')->value('id'));
        });

        Gate::define('disable-promo', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'disable promo')->value('id'));
        });
    }
}
