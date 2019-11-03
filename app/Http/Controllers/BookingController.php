<?php

namespace App\Http\Controllers;

use App\Bus;
use App\Bus_booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = Bus_booking::latest()->get();
        return view('admin.bookings',compact('bookings'));
    }


    /**
     * Display the specified resource.
     *
     * @param Bus_booking $booking
     * @return void
     */
    public function show(Bus_booking $booking)
    {
        //dd($booking);
        return view('admin.view-booking', compact('booking'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Bus_booking $booking
     * @return void
     */
    public function edit(Bus_booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Bus_booking $booking
     * @return void
     */
    public function update(Request $request, Bus_booking $booking)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Bus_booking $booking
     * @return void
     */
    public function destroy(Bus_booking $booking)
    {
        try {
            $booking->delete();
            return redirect()->back()->with('info', 'Bus hire has been removed!');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', 'Bus hire could not been removed!');
        }
    }
}
