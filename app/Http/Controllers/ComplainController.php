<?php

namespace App\Http\Controllers;

use App\Complain;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class ComplainController extends Controller
{
    public function index()
    {
        return view('complains.complains');
    }

    public function postComplain(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'phone' => 'required|numeric|min:10',
            'email' => 'required|email',
            'pic' => 'required|mimes:jpeg,bmp,png,png',
            'description' => 'required|min:20'
        ]);
        if ($request->hasFile('pic')) {
            $filename = time() . '.' . $request->pic->getClientOriginalExtension();
            $request->pic->move('complain_files', $filename);
        }
        $complain = new Complain;
        $complain->name = $request->name;
        $complain->phone = $request->phone;
        $complain->email = $request->email;
        $complain->pic = $filename;
        $complain->description = $request->description;
        $complain->save();
        return redirect('/')->with('success', 'complain launched successful');
    }
}
