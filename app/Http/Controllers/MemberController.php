<?php

namespace App\Http\Controllers;

use App\Member;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{

    public function __construct(){
        $this->middleware('member');
    }
    public function member_dash(){
        $user=Sentinel::getUser();

        $members=DB::table('members')->where('email','=',$user->email)->first();
        return view('members.index',['members'=>$members]);
    }

}
