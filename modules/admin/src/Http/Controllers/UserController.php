<?php

namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Admin;
use Modules\Admin\Privilege;
use Modules\Admin\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
         return $this->form($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $user = Admin::create($request->only(['name', 'email', 'password', 'role_id']));
        $user->privileges()->createMany($request->privilege);
        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Modules\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $user) {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Modules\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $user) {
        
        $this->authorize('update', $user);
        
        return $this->form($user);
    }
    
    private function form($user)
    {
        $privileges = Privilege::with(['privilegeCategory' => function ($query) {
                        $query->orderBy('created_at', 'desc');
                    }])->get();
        $roles = Role::with('privileges')->get();
        return view('admin::user.edit', compact('user','privileges','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Modules\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $user) {
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->input('password', $user->password);
        $user->role_id = $request->role_id;
        $user->save();
        $user->privileges()->delete();
        $user->privileges()->createMany($request->privilege);
        return redirect()->route('users.index');
    }

    /**
     * Update status the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Modules\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function statusUpdate(Request $request, Admin $user) {
        abort_if($user->id === 1, 403);

        $user->active = !$user->active;
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Modules\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $user) {
        
    }

}
