<?php
//app/Http/Controllers

namespace App\Http\Controllers;

use Request;

class LletraController extends Controller
{
    public function processarLletra()
    {
        $l = Request::input('lletra');
        if(ctype_alpha($l)){
            session(['paraula' => $e]);
            return view('joc');
        }
        else{
            return view('error');

        }
    }
}
