<?php

namespace Modules\Blogs\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Modules\Blogs\Policies\ManageBlogPolicy;
use Modules\Blogs\Policies\ManageBlogCategoryPolicy;

class BlogAuthServiceProvider extends ServiceProvider
{

    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Admin::class => ManageBlogPolicy::class,
        Admin::class => ManageBlogCategoryPolicy::class,
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
        Gate::define('view-post', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view post')->value('id'));
        });
        
        Gate::define('add-post', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'add post')->value('id'));
        });
        
        Gate::define('edit-post', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit post')->value('id'));
        });
        Gate::define('publish-post', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'publish post')->value('id'));
        });
        Gate::define('view-category-post', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view category post')->value('id'));
        });
        
        Gate::define('add-category-post', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'add category post')->value('id'));
        });
        
        Gate::define('edit-category-post', function ($admin) {
            return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit category post')->value('id'));
        });
        

    }
}
