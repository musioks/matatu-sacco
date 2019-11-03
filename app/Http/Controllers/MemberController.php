<?php

namespace App\Http\Controllers;

use App\Helpers\GeneralHelper;
use App\Helpers\LoanStatus;
use App\Insurance;
use App\Loan_applications;
use App\Loan_type;
use App\Share;
use Illuminate\Http\Request;

class MemberController extends Controller
{

    public function __construct()
    {
        $this->middleware('member');
    }

    public function member_dash()
    {
        return view('members.index');
    }

    public function loans()
    {
        return view('members.loans');
    }
    public function shares()
    {
        return view('members.shares');
    }
    public function addShare(Request $request)
    {
        Share::create(array_merge($request->all()));
        return redirect()->back()->with('success','Share added successfully!');
    }
    public function insurance()
    {
        return view('members.insurance');
    }
    public function addInsurance(Request $request)
    {
        //dd($request->all());
        Insurance::create(array_merge($request->all()));
        return redirect()->back()->with('success','Insurance added successfully!');
    }

// Get guarantor Requests page
    public function loanApplications()
    {
        return view('members.loan_applications');
    }

// Get guarantor Requests page
    public function guarantorRequests()
    {
        return view('members.guarantor_requests');
    }

// Leave Types
    public function leave_type($loan_type_id)
    {
        $loan_type = Loan_type::find($loan_type_id);
        return $loan_type;
    }

    // Get Applications  page
    public function apply()
    {
        $loan_types = Loan_type::all();
        return view('members.apply', compact('loan_types'));
    }

    // Store Application
    public function storeApplication(Request $request)
    {
        //dd($request->all());
        try {
            $loan_type = Loan_type::find($request->loan_type_id);
            $interest_amount = $request->principal_amount * $loan_type->interest_rate * $request->interest_period;
            $total_amount = $request->principal_amount + $interest_amount;
            //dd($total_amount);
            $monthly_installment = ($total_amount / ($request->interest_period)) / 12;
            //dd($monthly_installment);
            $no_of_repayments = $total_amount / $monthly_installment;
            Loan_applications::create([
                'member_id' => $request->member_id,
                'interest_period' => $request->interest_period,
                'principal_amount' => $request->principal_amount,
                'interest_amount' => $interest_amount,
                'monthly_installment' => $monthly_installment,
                'no_of_repayments' => $no_of_repayments,
                'loan_type_id' => $request->loan_type_id,
                'loan_status_id' => $request->loan_status_id,
                'guarantor_id' => $request->guarantor_id,
            ]);
            return redirect('/member/loan-applications')->with('success', 'The application has been submitted successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'an error occurred during application!,try again');
        }

    }

// Guarantor approve Loan
    public function acceptRequest($application_id)
    {
        try {
            Loan_applications::where('id', $application_id)->update(['guarantor_accepted' => 1, 'loan_status_id' => LoanStatus::pending()->id]);
            return redirect()->back()->with('success', 'Guarantor approval successful!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'an error occurred during application guarantor approval!,try again');
        }
    }
}
