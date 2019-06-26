<?php

namespace Modules\Blogs\Policies;

use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManageBlogCategoryPolicy
{

    use HandlesAuthorization;

    /**
    * @param \Modules\Admin\Admin $user
    * @return bool|null
    */
    public function before(Admin $user)
    {
        if ($user->id===1) {
            return true;
        }
    }
    
    /**
     * Determine whether the user can view the category Blog list.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function index(Admin $admin)
    {
        return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view category post')->value('id'));
    }

    /**
     * Determine whether the user can create category blog post.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $admin->privileges->contains('privilege_id', Privilege::where('name', 'add category post')->value('id'));
    }

    /**
     * Determine whether the user can update category post.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @param  \Modules\Admin\Admin  $user
     * @return mixed
     */
    public function update(Admin $admin)
    {
       return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit category post')->value('id'));
    }

}
