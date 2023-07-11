<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team_members = TeamMember::get();
        return view('cms.team_members.index',compact(['team_members']));
    }

    public function show($id)
    {
        $team_member = TeamMember::find($id);
        return view('cms.team_members.show',compact(['team_member']));
    }

  
}
