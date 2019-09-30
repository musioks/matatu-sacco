<?php


namespace App\Helpers;


use App\Loan;
use App\Loan_applications;

class LeaveHelper
{
    // All loan applications
    public static function all_applications()
    {
        $applications = Loan_applications::latest()->get();
        return $applications;
    }

// pending applications
    public static function pending_applications()
    {
        $statuses = collect([
            LoanStatus::pending()->id,
            LoanStatus::initiated()->id
        ]);
        $applications = Loan_applications::whereIn('loan_status_id', $statuses)->latest()->get();
        return $applications;
    }

//  approved applications
    public static function approved_applications()
    {
        $applications = Loan_applications::where('loan_status_id', LoanStatus::approved()->id)->latest()->get();
        return $applications;
    }

//  rejected applications
    public static function rejected_applications()
    {
        $applications = Loan_applications::where('loan_status_id', LoanStatus::rejected()->id)->latest()->get();
        return $applications;
    }

    // All loans
    public static function all_loans()
    {
        $loans = Loan::latest()->get();
        return $loans;
    }

}
