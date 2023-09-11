<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;

class WebMaster
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    // ROLES
    // 1 = WEBMASTER
    // 2 = ALLOWED TO EDIT
    public function handle($request, Closure $next)
    {
        $mydata = DB::select("EXEC jhay.spISmydata'".Auth::user()->employeeid."'");
        $role = $mydata[0]->role_id;

        if($role == 1)
        {
            return $next($request);
        }

        else
        {
            return redirect('home');
        }

    }
}
