<?php

namespace Modules\Admin\Policies;

use Modules\Admin\Admin;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManageUserPolicy {

    use HandlesAuthorization;

    public function before($user, $ability) {
        return ($user->id===1);
    }

    /**
     * Determine whether the user can view the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function view(Admin $admin, Admin $user) {
        
    }

    /**
     * Determine whether the user can create admins.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(Admin $user) {
        
    }

    /**
     * Determine whether the user can update the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function update(Admin $admin, Admin $user) {
        dump($admin->id);
        dump($admin->privileges);
        return false;
    }

    /**
     * Determine whether the user can delete the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function delete(Admin $admin, Admin $user) {
        //
    }

    /**
     * Determine whether the user can restore the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function restore(Admin $admin, Admin $user) {
        //
    }

    /**
     * Determine whether the user can permanently delete the admin.
     *
     * @param  \App\User  $user
     * @param  \App\Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function forceDelete(Admin $admin, Admin $user) {
        //
    }

}
