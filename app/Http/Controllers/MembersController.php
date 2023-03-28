<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\Member;

class MembersController extends Controller
{
    //
    function addData(Request $req)
    {
        $member=new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->address=$req->address;
        $member->save();
    }
}
