<?php

namespace Modules\Report\Policies;

use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Illuminate\Auth\Access\HandlesAuthorization;

class ManageReportVariantsPolicy
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
     * Determine whether the user can view variants report.
     *
     * @param  \Modules\Admin\Admin  $admin
     * @return mixed
     */
    public function update(Admin $admin)
    {
        return $admin->privileges->contains('privilege_id', Privilege::where('name', 'view report variants')
            ->value('id'));
    }

}
