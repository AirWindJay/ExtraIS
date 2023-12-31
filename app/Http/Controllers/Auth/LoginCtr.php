<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\CheckCtr;
use Illuminate\Support\Facades\Auth;
use DB;

class LoginCtr extends Controller
{
    use CheckCtr;

    public function index()
    {
        $user = Auth::user();
        if($user == null)
        {
            return view('welcome');
        }
        return redirect('/home');
    }

    protected  function login(Request $request)
    {
    $data = $this->authHomisAccount($request);

        if (count ($data) < 1)  {
            return redirect()
              ->back()
              ->withErrors(['username' => 'Invalid username or password'])
              ->withInput();
          }
        
        $mydata = DB::select("SELECT TOP 1 * FROM jhay.IS_user WHERE employeeid = '".$data[0]->employeeid."'");
        if (count ($mydata) == 1)
        {
            Auth::loginUsingId($data[0]->employeeid);
            return redirect('/home');
        }
        else
        {
            return redirect('/home');
        }

    }

    public function logout() {

        Auth::logout();
        return redirect('');
    
      }
}
