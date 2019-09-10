<?php

namespace App\Http\Controllers;

use App\Booking;
use App\Complain;
use App\Insurance;
use App\Share;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $users = DB::table('users')->get();
        $members = DB::table('members')->get();
        return view('admin.dashboard', ['users' => $users, 'members' => $members]);
    }

    public function members()
    {
        $members = DB::table('members')->get();
        return view('admin.members', ['members' => $members]);
    }

    public function users()
    {
        $users = DB::table('users')->get();
        return view('admin.users', ['users' => $users]);
    }

    public function approveLoan()
    {
        $loans = DB::select('SELECT m.fname,m.lname,l.date_due,l.date_applied,l.guarantor_status,l.admin_status, l.created_at,l.amount, l.member_id FROM members m JOIN loan_applications l ON m.id=l.member_id');
        return view('admin.loans', ['loans' => $loans]);
    }

    public function shares()
    {
        $users = DB::table('users')->get();
        $shares = DB::select('SELECT m.fname,m.lname,s.id as id,s.amount,s.updated_at FROM members m JOIN shares s ON m.id=s.member_id');
        return view('admin.shares', ['shares' => $shares, 'users' => $users]);
    }

    public function insurance()
    {
        $users = DB::table('users')->get();
        $insurances = DB::select('SELECT m.fname,m.lname,i.id, i.date_added, i.created_at FROM members m JOIN insurances i ON m.id=i.member_id');
        return view('admin.insurance', ['insurances' => $insurances, 'users' => $users]);
    }

    public function bookings()
    {
        $bookings = DB::select('SELECT * FROM bookings');
        return view('admin.bookings', ['bookings' => $bookings]);
    }

    public function complains()
    {
        $complains = DB::table('complains')->get();
        return view('admin.complains', ['complains' => $complains]);
    }

    public function postLoan(Request $request, $id)
    {
        if ($request->status == "YES") {
            $status = 1;
        } else {
            $status = 0;
        }
        $query = DB::select('UPDATE loan_applications SET admin_status=:status,admin_reason=:reason WHERE member_id=:id', ['status' => $status, 'reason' => $request->reason, 'id' => $id]);
        if ($status == 1) {
            $qr = DB::select('INSERT INTO loans(member_id,date_applied,date_due,amount,interest,status) SELECT member_id,date_applied,date_due,amount,interest,admin_status FROM loan_applications WHERE member_id=:id', ['id' => $id]);
            return redirect()->back()->with('success', 'Loan Approved successfully');
        }
    }

    public function postshare(Request $request)
    {
        $date = date('Y-m-d');
        $va = new Share;
        $va->member_id = $request->member_id;
        $va->amount = $request->amount;
        $va->date_added = $date;
        $va->save();

        return redirect()->back()->with('success', 'share addition was a success');

    }

    public function postInsurance(Request $request)
    {
        $date = date('Y-m-d');
        $va = new Insurance;
        $va->member_id = $request->member_id;
        $va->amount = $request->amount;
        $va->date_added = $date;
        $va->save();

        return redirect()->back()->with('success', 'Insurance addition was a success');

    }

    public function deleteBooking($id)
    {
        $bookings = Booking::find($id)->first();
        $bookings->delete();
        return redirect()->back();
    }

    public function deleteComplain($id)
    {
        $complain = Complain::find($id)->first();
        $complain->delete();
        return redirect()->back();
    }

    public function deleteInsurance($id)
    {
        $insurance = Insurance::find($id)->first();
        dd($insurance);
    }
}
