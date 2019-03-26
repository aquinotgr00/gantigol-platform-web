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

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $users = Admin::where('email', '<>', 'admin@mail.com')->paginate(15);
        return view('admin::user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Admin $user) {
        $this->authorize('create', Auth::user());
        return $this->form($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request) {
        $this->authorize('create', Auth::user());
        $request->validated();
        $user = Admin::create($request->only(['name', 'email', 'password', 'role_id']));
        $user->privileges()->createMany($request->privilege);
        return redirect_success('users.index', 'Success', "User {$user->name} created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  Modules\Admin\Admin  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $user) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Modules\Admin\Admin  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $user) {
        $this->authorize('update', $user);
        return $this->form($user);
    }
    
    private function form($user)
    {
        $privileges = Privilege::with(['privilegeCategory'])->get();
        $roles = Role::with('privileges')->get();
        return view('admin::user.edit', compact('user','privileges','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Modules\Admin\Admin  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUser $request, Admin $user) {
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
     * Update status the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Modules\Admin\Admin  $user
     * @return \Illuminate\Http\Response
     */
    public function statusUpdate(Request $request, Admin $user) {
        $this->authorize('statusUpdate', $user);
        $user->active = !$user->active;
        $user->save();
        return redirect_success('users.index', 'Success', 'User '."{$user->name} ".($user->active?'enabled':'disabled').'!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Modules\Admin\Admin  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $user) {
        
    }

}
