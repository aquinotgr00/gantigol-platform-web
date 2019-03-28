<?php

namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Modules\Admin\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Modules\Admin\Http\Requests\StoreUser;
use Modules\Admin\Http\Requests\UpdateUser;

class UserController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $this->authorize('index', Auth::user());
        
        $users = Admin::where('email', '<>', 'admin@mail.com')->paginate(15);
        return view('admin::user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create(Admin $user)
    {
        $this->authorize('create', Auth::user());
        return $this->form($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Modules\Admin\Http\Requests\StoreUser  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(StoreUser $request)
    {
        $this->authorize('create', Auth::user());
        $request->validated();
        $user = Admin::create($request->only(['name', 'email', 'password', 'role_id']));
        $user->privileges()->createMany($request->privilege);
        return redirect_success('users.index', 'Success', "User {$user->name} created!");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Modules\Admin\Admin  $user
     * @return \Illuminate\View\View
     */
    public function edit(Admin $user)
    {
        $this->authorize('update', $user);
        return $this->form($user);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Modules\Admin\Http\Requests\UpdateUser  $request
     * @param  \Modules\Admin\Admin  $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(UpdateUser $request, Admin $user)
    {
        $this->authorize('update', $user);
        $request->validated();
        $user->fill($request->except('password'));
        if ($request->filled('password')) {
            $user->password = $request->password;
        }
        $user->save();
        if (Gate::allows('edit-user-privileges', $user)) {
            if ($request->has('privilege')) {
                $user->privileges()->delete();
                $user->privileges()->createMany($request->privilege);
            }
        }
        return redirect_success('users.index', 'Success', "User {$user->name} updated!");
    }
    
    /**
     * Shared form for create and edit user
     *
     * @param  \Modules\Admin\Admin  $user
     * @return \Illuminate\View\View
     */
    private function form($user)
    {
        $privileges = Privilege::with(['privilegeCategory'])->get();
        $roles = Role::with('privileges')->get();
        return view('admin::user.edit', compact('user', 'privileges', 'roles'));
    }

    /**
     * Update status the specified resource in storage.
     *
     * @param  \Modules\Admin\Admin  $user
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function statusUpdate(Admin $user)
    {
        $this->authorize('statusUpdate', $user);
        $user->active = !(bool)$user->active;
        $user->save();
        $successMessage = 'User '."{$user->name} ".($user->active?'enabled':'disabled').'!';
        return redirect_success('users.index', 'Success', $successMessage);
    }
}
