<?php

namespace Modules\Admin\Policies;

use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManageUserPolicy {

    use HandlesAuthorization;

    public function before($user, $ability) {
        if($user->id===1) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\Modules\Admin\Admin  $admin
     * @param  \App\Modules\Admin\Admin  $user
     * @return mixed
     */
    public function view(Admin $admin, Admin $user) {
        
    }

    /**
     * Determine whether the user can create admin.
     *
     * @param  \App\Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function create(Admin $admin) {
        return $admin->privileges->contains('privilege_id', Privilege::where('name','add user')->value('id'));
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\Modules\Admin\Admin  $admin
     * @param  \App\Modules\Admin\Admin  $user
     * @return mixed
     */
    public function update(Admin $admin, Admin $user) {
        return $admin->id===$user->id || $admin->privileges->contains('privilege_id', Privilege::where('name','edit user')->value('id'));
    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\Modules\Admin\Admin  $admin
     * @param  \App\Modules\Admin\Admin  $user
     * @return mixed
     */
    public function delete(Admin $admin, Admin $user) {
        //
    }

    /**
     * Determine whether the user can restore the admin.
     *
     * @param  \App\Modules\Admin\Admin  $admin
     * @param  \App\Modules\Admin\Admin  $user
     * @return mixed
     */
    public function restore(Admin $admin, Admin $user) {
        //
    }

    /**
     * Determine whether the user can permanently delete the admin.
     *
     * @param  \App\Modules\Admin\Admin  $admin
     * @param  \App\Modules\Admin\Admin  $user
     * @return mixed
     */
    public function forceDelete(Admin $admin, Admin $user) {
        //
    }
    
    /**
     * Determine whether the user can update admin status (enable/disable)
     *
     * @param  \App\Modules\Admin\Admin  $admin
     * @param  \App\Modules\Admin\Admin  $user
     * @return mixed
     */
    public function statusUpdate(Admin $admin, Admin $user) {
        return $admin->id!==$user->id && $admin->privileges->contains('privilege_id', Privilege::where('name','enable/disable user')->value('id'));
    }

}
