<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sentinel;
use PDF;
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
