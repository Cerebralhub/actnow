<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disneyplus;
use PDF;

class DisneyplusController extends Controller
{
    public function create()
    {
        return view('pdf/form');
    }

    public function store(Request $request)
    {
        $profile = new Disneyplus;
        $profile->name = $request->input('name');
        $profile->state = $request->input('state');
        $profile->lga = $request->input('lga');
        $profile->gender = $request->input('gender');
        $profile->phone_no = $request->input('phone_no');
        $profile->email = $request->input('email');
        $profile->reg_no = random_int(1000000, 9999999);


        if($request->hasfile('image'))
        {

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profiles/', $filename);
            $profile->image = $filename;
        }

        $profile->save();        
        
    	$shows = Disneyplus::where('email', $profile->email)->get();
   
        return view('pdf/list', compact('shows'));

    }


    public function index()
    {
        $shows = Disneyplus::all();
        return view('pdf/list', compact('shows'));
    }


    public function downloadPDF($id) {
        $show = Disneyplus::find($id);
        $pdf = PDF::loadView('pdf/pdf', compact('show'));
        return $pdf->download('disney.pdf');
    }

}