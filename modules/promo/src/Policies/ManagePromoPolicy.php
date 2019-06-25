<?php

namespace Modules\Promo\Policies;

use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManagePromoPolicy
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
     * Determine whether the user can view the Blog list.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function index(Admin $admin)
    {
        return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view promo')->value('id'));
    }

    /**
     * Determine whether the user can create blog post.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $admin->privileges->contains('privilege_id', Privilege::where('name', 'add promo')->value('id'));
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @param  \Modules\Admin\Admin  $user
     * @return mixed
     */
    public function update(Admin $admin)
    {
       return $admin->privileges->contains('privilege_id', Privilege::where('name', 'edit promo')->value('id'));
    }

    /**
     * Determine whether the user can update Blog status publish
     *
     * @param  \Modules\Admin\Admin  $admin
     * @param  \Modules\Admin\Admin  $user
     * @return mixed
     */
    public function disableUpdate(Admin $admin)
    {
        return $admin->privileges->contains('privilege_id', Privilege::where('name', 'disable promo')->value('id'));
    }
}
