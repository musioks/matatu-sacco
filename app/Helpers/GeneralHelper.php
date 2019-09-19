<?php

namespace App\Helpers;

use App\Loan;
use App\Loan_applications;
use App\Member;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Support\Facades\DB;

class GeneralHelper
{
    // get logged in member
    public static function member()
    {
        $user = Sentinel::getUser();
        $member = DB::table('members')->where('email', '=', $user->email)->first();
        return $member;

    }

    // Guarantors
    public static function guarantors()
    {
        $user = Sentinel::getUser();
        $member = DB::table('members')->where('email', '=', $user->email)->first();
        $guarantors = Member::where('id', '<>', $member->id)->get();
        return $guarantors;
    }

    // Get all members
    public static function members()
    {
        $members = DB::table('members')->latest()->get();
        return $members;

    }

    public static function my_guarantor_requests()
    {
        $user = Sentinel::getUser();
        $member = DB::table('members')->where('email', '=', $user->email)->first();
        $guarantor_requests = Loan_applications::where('guarantor_id', $member->id)->get();
        return $guarantor_requests;
    }

    // My loan applications

    public static function my_loan_applications()
    {
        $user = Sentinel::getUser();
        $member = DB::table('members')->where('email', '=', $user->email)->first();
        $loan_applications = Loan_applications::where('member_id', $member->id)->get();
        return $loan_applications;
    }

    // My loan applications
    public static function my_loans()
    {
        $user = Sentinel::getUser();
        $member = DB::table('members')->where('email', '=', $user->email)->first();
        $loan_applications = Loan_applications::where('member_id', $member->id)
            ->where('loan_status_id', LoanStatus::approved()->id)
            ->get()->pluck('id');
        $loans = Loan::whereIn('loan_application_id', $loan_applications)->get();
        return $loans;

    }
}
