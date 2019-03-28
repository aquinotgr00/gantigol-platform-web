<?php

namespace Modules\Admin\Policies;

use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManageUserPolicy
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
     * Determine whether the user can view the admin.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function index(Admin $admin)
    {
        return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view users')->value('id'));
    }

    /**
     * Determine whether the user can create admin.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin)
    {
        return $admin->privileges->contains('privilege_id', Privilege::where('name', 'add user')->value('id'));
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @param  \Modules\Admin\Admin  $user
     * @return mixed
     */
    public function update(Admin $admin, Admin $user)
    {
        $privilegeId = Privilege::where('name', 'edit user')->value('id');
        return $admin->id===$user->id || $admin->privileges->contains('privilege_id', $privilegeId);
    }

    /**
     * Determine whether the user can update admin status (enable/disable)
     *
     * @param  \Modules\Admin\Admin  $admin
     * @param  \Modules\Admin\Admin  $user
     * @return mixed
     */
    public function statusUpdate(Admin $admin, Admin $user)
    {
        $privilegeId = Privilege::where('name', 'enable/disable user')->value('id');
        return $admin->id!==$user->id && $admin->privileges->contains('privilege_id', $privilegeId);
    }
}
