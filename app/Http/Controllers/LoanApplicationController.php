<?php

namespace App\Http\Controllers;

use App\LoanApplication;
use App\Share;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoanApplicationController extends Controller
{
    public function loanApply()
    {
        $users = DB::select('SELECT * FROM users WHERE id NOT IN (:id) ', ['id' => Sentinel::getUser()->id]);
        return view('loans.apply', ['users' => $users]);
    }

    public function postLoanApply(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'guarantor' => 'required',
            'due' => 'required'
        ]);
        $interest = 10 / 100 * ($request->amount);
        $date = Date('Y-m-d');
        $loan = new LoanApplication;
        $loan->member_id = $request->guarantor;
        $loan->date_applied = $date;
        $loan->date_due = $request->due;
        $loan->amount = $request->amount;
        $loan->interest = $interest;
        $loan->save();
        return redirect('/member')->with('success', 'Member Account Created Successfully!.');
    }

    public function loanStatus($id)
    {
        $loanStatus = DB::select('SELECT m.fname, m.lname, l.amount,l.date_due,l.admin_status,l.interest,l.date_applied FROM members m JOIN loan_applications l ON m.id=l.member_id  WHERE m.user_id=:id', ['id' => $id]);
        return view('loans.loan_status', ['loanStatus' => $loanStatus]);
    }

    public function request($id)
    {
        $request = DB::select('SELECT l.amount,l.interest, l.date_due, l.guarantor_status, m.fname, m.lname,m.phone FROM loan_applications l JOIN members m on m.id=l.member_id WHERE l.member_id=:id', ["id" => $id]);
        return view('loans.request', ["request" => $request]);
    }
}
