<?php

namespace App\Http\Controllers;

use App\Bus;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;
use Image;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $buses = Bus::latest()->get();
        return view('admin.bus', compact('buses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request,[
           'number_plate'=>'required',
        ]);
        $bus=Bus::create(array_merge($request->all()));
        if ($request->hasFile('bus_photo')) {
            $file = $request->file('bus_photo');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $image =Image::make($file->getRealPath());
            $image->resize(470, 300);
            $image->save('buses/' . $fileName);
            $bus->update(['bus_photo' => $fileName]);
        }
        return redirect()->back()->with('success','Bus has been created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Bus $bus
     * @return Response
     */
    public function show(Bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Bus $bus
     * @return Response
     */
    public function edit(Bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Bus $bus
     * @return Response
     */
    public function update(Request $request, Bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Bus $bus
     * @return Response
     */
    public function destroy(Bus $bus)
    {
        //
    }
}
