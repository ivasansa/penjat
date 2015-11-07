<?php
//app/Http/Controllers

namespace App\Classes;

use Request;


class Jugador {
    public function guardarTop($punts){
        $path = storage_path('app/tops.txt');
        $file = fopen($path,"a");
//        fputs($file, session('em')." ".session('pw')." ".$punts."\n\r");
        fputs($file, "email=".session('em')."&pass=".session('pw')."&punts=".$punts."\n");
//        $paraula = fgets($file);
        fclose($file);
//        return $paraula;
    }
}
?>
