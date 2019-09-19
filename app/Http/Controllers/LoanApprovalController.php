<?php

namespace App\Http\Controllers;

use App\Helpers\LoanStatus;
use App\Loan;
use App\Loan_applications;
use Illuminate\Http\Request;

class LoanApprovalController extends Controller
{
    // Admin approve Loan
    public function approve($application_id)
    {
        try {
            $date = date("Y-m-d");
            $date = strtotime(date("Y-m-d", strtotime($date)) . " +1 month");
            $final_date = date("Y-m-d",$date);
            //dd($final_date);
            $application=Loan_applications::where('id', $application_id)->update(['date_approved'=>date('Y-m-d'),'loan_status_id' => LoanStatus::approved()->id]);
            Loan::create([
                'loan_application_id'=>$application_id,
                'amount_paid'=>0,
                'repayment_date'=>date('Y-m-d'),
                'next_repayment_date'=>$final_date,
                'loan_status_id'=>LoanStatus::approved()->id,
            ]);
            return redirect()->back()->with('success', 'Loan has been approved!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'an error occurred during processing!,try again');
        }
    }

    // Admin reject Loan
    public function reject($application_id)
    {
        try {
            Loan_applications::where('id', $application_id)->update(['loan_status_id' => LoanStatus::rejected()->id]);
            return redirect()->back()->with('success', 'Loan has been rejected!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'an error occurred during processing!,try again');
        }
    }
}
