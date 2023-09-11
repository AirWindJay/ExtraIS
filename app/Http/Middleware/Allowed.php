<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use DB;

class Allowed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $mydata = DB::select("EXEC jhay.spISmydata'".Auth::user()->employeeid."'");
        $role = $mydata[0]->role_id;

        if($role == 2)
        {
            return $next($request);
        }
        elseif($role == 1)
        {
            return $next($request);
        }
        else
        {
            return redirect('home');
        }

    }
}
