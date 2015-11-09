<?php
//app/Http/Controllers

namespace App\Http\Controllers;

use Request;

class LoginController extends Controller
{
    public function processarFormulari()
    {
        $e = Request::input('email');
        $p = Request::input('pass');
        if(strlen($p)!= 6 || !ctype_alnum($p)){
            return view('welcome2');
        }
        elseif(!filter_var($e, FILTER_VALIDATE_EMAIL)) {
            return view('welcome3');
        }
        else{
            session(['em' => $e]);
            session(['pw' => $p]);
            session(['lletra' => NULL]);
            session(['er' => 0]);
            return view('joc');

//            echo session('key');
//            Session::put('email', 'pass');
//            $value = Session::get('email');
//            echo $value;
        }
    }
}
