<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reg;
// use Illuminate\Support\Facades\DB;

class RegController extends Controller
{
    //




    function index()
    {
        try{
        return view('register');
    }
        catch (\Exception $e) {
        return back()->withError($e->getMessage())->withInput();
    }
    }







    function register(Request $req){   

        Reg::create($req->all());
            return back()->with('success', 'Registration successfully.');
        }





        function regList()
        {

            try{
                if(!session()->has('user')){
                    return redirect('/login')->with('warning', 'Please login to access the list of those who have registered');

                }else{
                    $lists = Reg::all();    
                    return view ('viewRegistrants', ['list'=>$lists]);
                }
        }        
        catch (\Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
    }
    







        function filter(Request $req){

            try{
            $filter = Reg::where(['state'=>$req->state])->get();  
            
            {
                return view ('/viewRegistrants', ['list'=>$filter, 'stateName'=>$req]);
            }
        }        catch (\Exception $e) {
            return back()->withError($e->getMessage())->withInput();
        }
        }



        public function destroy($id)  
    {  
        Reg::destroy($id);  
        return redirect('/viewRegistrants')->with('success', 'The record has been deleted');

    }  






        public function barchart(Request $req)
    {
        $abia = Reg::where('state','Abia')->get();
    	$adamawa = Reg::where('state','Adamawa')->get();
    	$lagos = Reg::where('state','Lagos')->get();
    	$akwaIbom = Reg::where('state','Akwa Ibom')->get();
    	$anambra = Reg::where('state','Anambra')->get();
    	$bauchi = Reg::where('state','Bauchi')->get();
    	$bayelsa = Reg::where('state','Bayelsa')->get();
    	$benue = Reg::where('state','Benue')->get();
    	$borno = Reg::where('state','Borno')->get();
    	$cross_River = Reg::where('state','Cross River')->get();
    	$delta = Reg::where('state','Delta')->get();
    	$ebonyi = Reg::where('state','Ebonyi')->get();
    	$edo = Reg::where('state','Edo')->get();
    	$ekiti = Reg::where('state','Ekiti')->get();
    	$enugu = Reg::where('state','Enugu')->get();
    


    	$abiaCount = count($abia);    	
        $adamawaCount = count($adamawa);    	
    	$akwaIbomCount = count($akwaIbom);    	
    	$anambraCount = count($anambra);    	
    	$bauchiCount = count($bauchi);    	

    	$myArr =[$abiaCount,$adamawaCount, $bauchiCount, $akwaIbomCount];



        // foreach ($user as $key => $value) {

        //         $subjectData[] = [$value['subject'] , $value['point']];

        //     }

        // return view('post.chart.google',compact('subjectData'));


        return view ('/barchart', ['list'=>json_encode($myArr)]);
    } 





    // function barchart()
    // {
    //     $lists = Reg::all('state');    
    //     return view ('barchart', ['list'=>$lists]);
    // }






    }

