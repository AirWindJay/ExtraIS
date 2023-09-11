<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class UniCharCTR extends Controller
{
    public function index()
    {
        $mydata = DB::select("EXEC jhay.spISmydata '".Auth::user()->employeeid."'");

        return view('UniversalCharging.index', compact(
            'mydata'
        ));
    }
    
    public function submitenccode(request $request)
    {
        return reposnse()->json($request);
    }
}
