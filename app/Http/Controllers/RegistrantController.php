<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrantController extends Controller
{
    //
    function index()
    {
        return view('viewRegistrants');
    }
}
