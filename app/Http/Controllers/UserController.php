<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //

    function index()
    {
        try{
        return view('/login');
    }        catch (\Exception $e) {
        return back()->withError($e->getMessage())->withInput();
    }
    
    }




    function login(Request $req){
        $user = User::where(['email'=>$req->email])->first();    
        if(!$user || !Hash::check($req->password, $user->password))
        {
            return back()->with('warning', 'Incorrect email or password');
        }
        else{
            $req->session()->put('user', $user);
            return redirect ('/viewRegistrants');
        }
    }






    function registerForm()
    {
        try{
        return view('/registerUser');
    }
    catch (\Exception $e) {
        return back()->withError($e->getMessage())->withInput();
    }
    }





    function save(Request $req){

        $req->validate(
            [
                'sname' => 'required',
                'fname' => 'required',
                'email' => 'required|email|unique:users',
                'token' => 'required',
                'password' => 'required|min:5'


            ], 
            [
                'sname.required' => 'Surname is required',
                'fname.required' => 'First Name is required',
                'email.required' => 'Email is required',
                'password.required' => 'Password is required',
                'token.required' => 'License Key is required',

            ]
          );


        $user = User::where(['email'=>'token@gmail.com'])->first(); 
        if(!Hash::check($req->token, $user->token))
        {
            return back()->with('warning', 'License key is invalid.');
        }else{
        $user = new User;
        $user->sname=$req->sname;
        $user->fname=$req->fname;
        $user->email=$req->email;
        $user->token=Hash::make($req->token);
        $user->password=Hash::make($req->password);
        $user->save();
      
        return back()->with('success', 'User created successfully.');

        }
    
    }


}
