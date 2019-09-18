<?php


namespace App\Helpers;

use Illuminate\Support\Facades\DB;

class LoanStatus
{

// get approval status where name is like "pending"
    public static function pending()
    {
        $pending = DB::table('loan_statuses')->where('name', 'like', '%pending%')->first();
        return $pending;
    }

// get approval status where name is like "initiated"
    public static function initiated()
    {
        $initiated = DB::table('loan_statuses')->where('name', 'like', '%initiated%')->first();
        return $initiated;
    }

// get approval status where name is like "approved"
    public static function approved()
    {
        $approved = DB::table('loan_statuses')->where('name', 'like', '%approved%')->first();
        return $approved;
    }

// get approval status where name is like "rejected"
    public static function rejected()
    {
        $rejected = DB::table('loan_statuses')->where('name', 'like', '%rejected%')->first();
        return $rejected;
    }


}
