<?php
//app/Http/Controllers

namespace App\Classes;

use Request;


class Partida {

    public function getParaula(){
        $path = storage_path('app/paraules.txt');
        $file = fopen($path,"r");
        $paraula = fgets($file);
        fclose($file);
        return $paraula;
    }


}
?>
