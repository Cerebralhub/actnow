<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use PDF;

class ProfileController extends Controller
{
    public function index()
    {
        // return view('profile/index');
        $profile = Profile::all();
        return view('profile/index', compact('profile'));
    }


    public function create()
    {
        return view('profile.create');
    }

    public function store(Request $request)
    {
        $profile = new Profile;
        $profile->name = $request->input('name');
        $profile->state = $request->input('state');
        $profile->lga = $request->input('lga');
        $profile->gender = $request->input('gender');
        $profile->phone_no = $request->input('phone_no');
        $profile->email = $request->input('email');
        $profile->reg_no = random_int(1000000, 9999999);


        if($request->hasfile('profile_image'))
        {
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profiles/', $filename);
            $profile->profile_image = $filename;
        }

        $profile->save();        
        
    	$member = Profile::where('email', $profile->email)->get();
        // return redirect('/login')->with('warning', 'Please login to access the list of those who have registered');
    
        return view ('profile/index', ['member'=>$member]);
    }

    public function edit($id)
    {
        $profile = Profile::find($id);
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::find($id);
        $profile->name = $request->input('name');
        $profile->state = $request->input('state');
        $profile->lga = $request->input('lga');
        $profile->gender = $request->input('gender');
        $profile->phone_no = $request->input('phone_no');
        $profile->email = $request->input('email');
        $profile->reg_no = random_int(1000000, 9999999);
        if($request->hasfile('profile_image'))
        {
            $destination = 'uploads/profiles/'.$profile->profile_image;
            // if(File::exists($destination))
            // {
            //     File::delete($destination);
            // }
            $file = $request->file('profile_image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/profiles/', $filename);
            $profile->profile_image = $filename;
        }

        $profile->update();
        return redirect()->back()->with('status','profile Image Updated Successfully');
    }

    public function destroy($id)
    {
        $profile = Profile::find($id);
        // $destination = 'uploads/profiles/'.$profile->profile_image;
        $profile->delete();
        return redirect()->back()->with('status','profile Image Deleted Successfully');
    }



    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the posts table
        $profile = Profile::query()
            ->where('name', 'LIKE', "%{$search}%")
            ->orWhere('state', 'LIKE', "%{$search}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view ('profile/index', ['profile'=>$profile]);
    }
    

    public function download($id) {
        $profile = Profile::find($id);
        $pdf = PDF::loadView('profile/download', compact('profile'));
        return $pdf->download('actnow.pdf');
}

}
