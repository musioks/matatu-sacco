<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Bus_booking;
use App\Member;
use Carbon\Carbon;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function hireBus(Request $request)
    {
        try {
            $data = [
                'bus_id' => $request->bus_id,
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'purpose' => $request->purpose,
                'from_date' => $request->from_date,
                'to_date' => $request->to_date,
            ];
            $booking_exists = DB::table('bus_bookings')
                ->where('status', 1)
                ->where('bus_id', $data['bus_id'])
                ->whereBetween(DB::raw('from_date AND to_date'), [$request->from_date, $request->to_date])
                ->get();
            if ($booking_exists->isEmpty()) {
                Bus_booking::create($data);
                return redirect()->back()->with('success', 'Bus has been booked successfully!');
            } else {
                return redirect()->back()->with('warning', 'Bus is already in hire!');
            }
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Bus  could not be booked, try again!');
        }

    }

    public function login()
    {
        $buses = Bus::paginate(4);
        // dd($buses);
        return view('login', compact('buses'));
    }

    public function signin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        try {
            if (Sentinel::authenticate($request->all())) {
                $slug = Sentinel::getUser()->roles()->first()->slug;
                if ($slug == 'admin') {
                    return redirect('/dashboard');
                } elseif ($slug == 'member') {
                    return redirect('/member');
                }
            } else {
                return redirect()->back()->with('error', 'wrong credentials!');
            }
        } catch (ThrottlingException $e) {
            $delay = $e->getDelay();
            return redirect()->back()->with('error', "you are banned for $delay seconds.");

        } catch (NotActivatedException $e) {
            return redirect()->back()->with('error', "your account is not activated yet.");

        }

    }

    public function getLogout()
    {
        Sentinel::logout();
        return redirect('/');

    }

    public function register()
    {
        return view('register');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'nid' => 'required|unique:members',
            'dob' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:users',
            'residence' => 'required',
            'nok' => 'required',
            'relationship' => 'required',
            'password' => 'required|confirmed'
        ]);
        DB::transaction(function () use ($request) {
            $name = $request->fname . ' ' . $request->lname;
            $credentials = [
                'name' => $name,
                'email' => $request->email,
                'password' => $request->password,
            ];

            $user = Sentinel::registerAndActivate($credentials);
            $role = Sentinel::findRoleBySlug('member');
            $role->users()->attach($user);

            $member = new Member;
            $member->user_id = $user->id;
            $member->fname = $request->fname;
            $member->lname = $request->lname;
            $member->nid = $request->nid;
            $member->dob = $request->dob;
            $member->phone = $request->phone;
            $member->email = $request->email;
            $member->residence = $request->residence;
            $member->nok = $request->nok;
            $member->relationship = $request->relationship;
            $member->save();
        });
        return redirect('/')->with('success', 'Member Account Created Successfully!.');

    }

    public function signup()
    {
        return view('admin.signup');
    }


    public function hire()
    {
        return view('hire.hire');
    }


}
