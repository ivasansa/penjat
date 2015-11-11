<?php
//app/Http/Controllers

namespace App\Classes;

use Request;


class Jugador {
    /*
    *Al finalitzar el joc, guarda al fitxer tops.txt, l'email, la pass i la puntuacio
    *param1 $punts, punts a guardar.
    */
    public function guardarTop($punts){
        $path = storage_path('app/tops.txt');
        $file = fopen($path,"a");
        fputs($file, "email=".session('em')."&pass=".session('pw')."&punts=".$punts."\n");
        fclose($file);
    }

    public function __toString() {
        return "</br>Debugg: Paraula: ".session('paraula')." Solucio ".session('solucio')."</br></br>";
    }

}
?>
