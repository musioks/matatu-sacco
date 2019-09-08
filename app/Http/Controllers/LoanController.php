<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoanController extends Controller
{
    public function LoanBalance($id)
    {
        $loan=DB::select('SELECT * FROM loans WHERE member_id=:id',["id"=>$id]);
    	return view('loans.index',["loan"=>$loan]);
    }  
    public function shareBalance($id)
    {
        $shares=DB::table('shares')->where('member_id',$id)->get();
    	return view('loans.share_balance')->withShares($shares);
    } 
     public function insuranceBalance($id)
    {
        $inus=DB::table('insurances')->where('member_id',$id)->get();
    	return view('loans.insurance')->withInus($inus);
    }
    public function Deleteshares($id)
    {
        $shares=DB::table('shares')->where('id')->first();
        $shares->delete();
        return redirect()->back();
    }
  
}
