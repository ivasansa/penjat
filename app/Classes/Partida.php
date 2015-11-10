<?php
//app/Http/Controllers

namespace App\Classes;

use Request;


class Partida {

    /*
    *Llegeix paraules.txt i extreu una paraula per jugar
    */
    public function getParaula(){
        $path = storage_path('app/paraules.txt');
        $file = fopen($path,"r");
        $paraula = fgets($file);
        fclose($file);
        return $paraula;
    }

    /*Agafa la paraula escollida per jugar i crea un array $solucio ple de "_"
    *param1 $paraula
    *return array de "_"
    */
    public function getSolucio($paraula){
        $charCount = strlen($paraula);
        $solucio = array();
        for($i = 0; $i < $charCount; ++$i){
        array_push($solucio,"_");
        }
        array_pop($solucio);
        return implode($solucio);
        }


    public function getEstat($estat){
     $dir = 'images/';
    //Array of hangmen
    $hs = array('<img src="' . $dir . '/' . "Hangman-0.png" . '" alt="' . "Hangman-0.png" . '" />', '<img src="' . $dir . '/' . "Hangman-1.png" . '" alt="' . "Hangman-1.png" . '" />', '<img src="' . $dir . '/' . "Hangman-2.png" . '" alt="' . "Hangman-2.png" . '" />', '<img src="' . $dir . '/' . "Hangman-3.png" . '" alt="' . "Hangman-3.png" . '" />','<img src="' . $dir . '/' . "Hangman-4.png" . '" alt="' . "Hangman-4.png" . '" />','<img src="' . $dir . '/' . "Hangman-5.png" . '" alt="' . "Hangman-5.png" . '" />','<img src="' . $dir . '/' . "Hangman-6.png" . '" alt="' . "Hangman-6.png" . '" />');

        echo $hs[$estat];
}

}
?>
