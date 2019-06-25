<?php

namespace Modules\Report\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Modules\Report\Policies\ManageReportPolicy;
use Modules\Report\Policies\ManageReportVariantsPolicy;

class ReportAuthServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Admin::class => ManageReportPolicy::class,
        Admin::class => ManageReportVariantsPolicy::class,
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
        Gate::define('view-report-sales', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view report sales')
                ->value('id'));
        });
        
        Gate::define('view-report-variants', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view report variants')
                ->value('id'));
        });

    }
}
