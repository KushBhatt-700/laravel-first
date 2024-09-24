<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MemberData;
use App\Models\GroupData;

class GroupMemberData extends Controller
{
    public function index(){
        return MemberData::with('getGroup')->get();
    }

    public function oneToMany(){
        return MemberData::with('getMemberWithGroup')->get();
    }

    public function getGroupMembers(){
        return GroupData::with('getMembersByGroups')->get();
    }
}
 