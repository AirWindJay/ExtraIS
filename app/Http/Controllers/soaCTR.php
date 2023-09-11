<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class soaCTR extends Controller
{
    public function JS_SOA_GenPatientList(request $request)
    {
        $patlist = DB::SELECT("select * from jhay.fnPatSearch('%$request->hospnumber%', '%$request->patlast%', '%$request->patfirst%', '%$request->patmiddle%')");
        return response()->json($patlist);
    }

    public function JS_SOA_GenEncounterList(request $request)
    {
        $enctrs = DB::SELECT("SELECT * from les.AllEncounters('$request->hpercode') order by admdate desc");
        return response()->json($enctrs);
    }

    public function soaform()
    {
        $header = DB::SELECT("SELECT top 1 formno, formtitle, revisionno, effdate from bghmc.les.isoformheaders where formno = 'FS-BIL-004'");
        return view('SOA.form', compact(
            'header'
        ));
    }
}
