<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\actlog;
use App\ISusers;

class WebMasterCtr extends Controller
{
    public function actlog()
    {
        $mydata = DB::select("EXEC jhay.spISmydata '".Auth::user()->employeeid."'");
        $actlogs = actlog::orderBy('created_at', 'desc')
            ->leftJoin('hospital.dbo.hpersonal', 'hospital.jhay.IS_actlog.employeeid', '=', 'hospital.dbo.hpersonal.employeeid')
            ->paginate(15);

        return view('WebMaster.actlog', compact(
            'mydata',
            'actlogs'
        ));
    }

    public function users()
    {
        $mydata = DB::select("EXEC jhay.spISmydata '".Auth::user()->employeeid."'");
        $users = ISusers::leftJoin('hospital.dbo.hpersonal', 'hospital.jhay.IS_user.employeeid', '=', 'hospital.dbo.hpersonal.employeeid')
            ->get();
        $employees = DB::select("EXEC [jhay].[spALLgetnames]");

        return view('WebMaster.userlist', compact(
            'mydata',
            'users',
            'employees'
        ));
    }
    
    public function adduser(request $request)
    {
        $user =  new ISusers();
        $user->employeeid   = $request->employeeid;
        $user->role_id      = $request->role_id;
        $user->save();

        $log = new actlog();
        $log->employeeid    = Auth::user()->employeeid;
        $log->act_details   = 'Add New User: '.$request->employeeid.' Role: '.$request->role_id;
        $log->save();

        return redirect('/webmaster/users');
    }

    public function edituser($id)
    {
        $mydata = DB::select("EXEC jhay.spISmydata '".Auth::user()->employeeid."'");
        $user =  ISusers::where('employeeid', $id)->first();
        
        return view('WebMaster.edituser', compact(
            'mydata',
            'user'
        ));
    }

    public function saveuser(request $request)
    {
        $user =  ISusers::where('employeeid', $request->employeeid)->first();
        $user->role_id = $request->role_id;
        $user->save();

        $log = new actlog();
        $log->employeeid    = Auth::user()->employeeid;
        $log->act_details   = 'Change Role of User : '.$request->employeeid;
        $log->save();

        return redirect('/webmaster/users');
    }

    public function deleteuser($id)
    {
        $user =  ISusers::where('employeeid', $id)->first();
        $user->delete();

        $log = new actlog();
        $log->employeeid    = Auth::user()->employeeid;
        $log->act_details   = 'Delelte User: '.$id;
        $log->save();

        return redirect('/webmaster/users');
    }
}
