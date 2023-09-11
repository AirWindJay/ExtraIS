<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\actlog;
use Illuminate\Support\Facades\Input;

class ChecklistCtr extends Controller
{
    public function index()
    {
        $mydata = DB::select("EXEC jhay.spISmydata '".Auth::user()->employeeid."'");

        return view('Checklist.index', compact(
            'mydata'
        ));
    }

    public function patlist(request $request)
    {   
        $index = 0;
        $mydata = DB::select("EXEC jhay.spISmydata '".Auth::user()->employeeid."'");
        $pats = DB::select("EXEC [hospital].[jhay].[patlist] '$request->hos_no'");
        foreach($pats as $pat)
            {
                $dbward = DB::select("SELECT les.sfnGetWard('$pat->enccode') AS ward");
                $dbward = $dbward[0]->ward;
                $pats[$index]->getward = $dbward;
                $index++;
            }

        return view('Checklist.patlist', compact(
            'mydata',
            'pats'
        ));
    }

    public function checklist(request $request)
    {
        $mydata = DB::select("EXEC jhay.spISmydata '".Auth::user()->employeeid."'");
        $checklist = DB::select("EXEC les.patientChartCheckList '$request->enccode'");

        return view('checklist.viewonly.checklistform', compact(
            'mydata',
            'checklist'
        ));
    }

    public function checklisteditable(request $request)
    {
        $mydata = DB::select("EXEC jhay.spISmydata '".Auth::user()->employeeid."'");
        $checklist = DB::select("EXEC les.patientChartCheckList '$request->enccode'");

        return view('checklist.checklistformeditable', compact(
            'mydata',
            'checklist',
            'mywards'
        ));
    }

    

    public function savechanges(request $request)
    {
        DB::update("exec [hospital].[jhay].[uncheckedchartPatientCCL] '$request->enccode'");
        if ($request->checkcount1 == '1')
        {
            DB::update("exec [hospital].[jhay].[checkedchartPatientCCL] '$request->enccode', '$request->cclCode1'");
        }
        if ($request->checkcount2 == '1')
        {
            DB::update("exec [hospital].[jhay].[checkedchartPatientCCL] '$request->enccode', '$request->cclCode2'");
        }
        if ($request->checkcount3 == '1')
        {
            DB::update("exec [hospital].[jhay].[checkedchartPatientCCL] '$request->enccode', '$request->cclCode3'");
        }
        if ($request->checkcount4 == '1')
        {
            DB::update("exec [hospital].[jhay].[checkedchartPatientCCL] '$request->enccode', '$request->cclCode4'");
        }
        
        
        if (count(Input::get('checkcount')) > 0)
        {
            foreach (Input::get('checkcount') as $key => $val) {
                if(Input::get("checkcount.$key") == '1')
                {
                    DB::update("exec [hospital].[jhay].[checkedchartPatientCCL] '$request->enccode', '".Input::get("cclCode.$key")."'");
                }
            }
        }

     

        $actlog = new actlog;
        $actlog->employeeid = Auth::user()->employeeid;
        $actlog->act_details = 'save data from enccode: '.$request->enccode;
        $actlog->save();

        return redirect('/home');
    }
}
