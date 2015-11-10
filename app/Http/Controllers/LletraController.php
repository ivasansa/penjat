<?php
//app/Http/Controllers

namespace App\Http\Controllers;

use Request;

class LletraController extends Controller
{
    public function processarLletra()
    {
        $l = Request::input('lletra');
        if(session('er')==6){
            return view('welcome');
        }
        if(ctype_alpha($l)){
            session(['lletra' => $l]);
            return view('joc');
//            echo $l;

        }
        else{
            return view('error');

        }
    }
    public function redireccionar()
    {
        return view('welcome');
    }
}
