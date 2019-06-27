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
        return view('membership::membership.index');
    }
    
    public function show(Member $member)
    {
        return view('membership::membership.show', compact('member'));
    }

    public function ajaxAllMembership(Request $request)
    {
        return DataTables::of(Member::all())
                ->addColumn('member', function($member){
                    return [
                        'name'=>$member->name,
                        'link'=>route("members.show",["member"=>$member->id])
                    ];
                })
                ->make(true);
    }
}
