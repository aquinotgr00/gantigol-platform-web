<?php

namespace Modules\Admin\Http\Controllers;

use Modules\Admin\Admin;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Admin::where('email','<>','admin@mail.com')->paginate(15);
        return view('admin::user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Admin $user)
    {
        return view('admin::user.edit', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  Modules\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $user)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Modules\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $user)
    {
        return view('admin::user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Modules\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $user)
    {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Modules\Admin\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $user)
    {
    }
}
