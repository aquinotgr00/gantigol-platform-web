<?php

namespace Modules\Membership\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Membership\Member;
use DataTables;

class MembershipController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Memberships'
        ];
        return view('membership::membership.index',compact('data'));
    }

    public function ajaxAllMembership(Request $request)
    {
        $member = Member::all();
        return DataTables::of($member)->make(true);
    }
}
