<?php
//app/Http/Controllers

namespace App\Http\Controllers;

use Request;

class NombreController extends Controller
{
    public function mostrarFormulari()
    {
        return view('formulariNombre');
    }
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
            echo "hola";
        }
    }
}
