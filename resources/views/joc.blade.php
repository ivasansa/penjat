<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?
family=Lato:100" rel="stylesheet" type="text/css">
 <link href="{{{ asset('/style.css') }}}"
rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="content">


               <?php

                $partida = new App\Classes\Partida;
                //extreu la paraula a endevinar
                $paraula = $partida->getParaula();
                $jugador = new App\Classes\Jugador;

                if(session('newgame')){
                    //crea el vector de "_"
                    $solucio = $partida->getSolucio($paraula);//String de "_"
    //                $img = storage_path('app/paraules.txt');
                    session(['newgame' => false]);
                    session(['solucio' => $solucio]);
                }


                $solucio = session('solucio');

//                echo $paraula."</br>";
//                echo $solucio."</br>";
//                session(['pa' => $paraula]);



//                echo session('lletra');
//                echo "</br>";
////                echo session('er');
                $error = session('er');

//              $url = asset('storage/app/paraules.txt');
//              echo $url;



                //Finalitza joc
//                $jugador = new App\Classes\Jugador;
//                $jugador->guardarTop("10");
//                echo "</br>";
//                echo "El teu email és: ".session('em')."</br>";
//                echo "La teva contrasenya és: ".session('pw');
//                echo "</br>";

                $off = 0;
            $pos = strpos($paraula, session('lletra'), $off); // $pos = 7, no 0
                $punts = session('punts');
                if($pos === false){
                    session(++$error);
                    session(['er' => $error]);

                }
                else{
                // Si el caràcter existeix
                    while($pos !== false) {
                        $solArray = str_split($solucio);


                        $solucio[$pos] = session('lletra');

                        $off=$pos+1;
                        $pos = strpos($paraula, session('lletra'), $off);
                        ++$punts;
                      session(['solucio' => $solucio]);
                    }
                }
                echo $solucio."</br>";
//                echo $pos;
                if($error == 6){
                    echo "Has perdut, prem el botó torna per anar a la pàgina inicial.";
                }


                 session(['punts' => $punts]);


                //acaba el joc
                if($punts+1 == strlen($paraula)){
                    echo "Has guanyat!, prem l botó de torna per anar a la pàgina inicial";
                    $jugador->guardarTop($punts);
                }




//                pinta penjat
                $partida->getEstat($error);
                ?>


                <div id="arrayParaula">

                    {!! Form::open(array('url' => '/introduccioLletra')) !!}

                    {!! Form::text('lletra') !!}

                    {!!  Form::submit('Prova Lletra') !!}
                    {!! Form::close() !!}
                </div>

                <div id="red">
                {!! Form::open(array('url' => '/redirect')) !!}



                    {!!  Form::submit('Torna') !!}
                    {!! Form::close() !!}
                </div>

            </div>

        </div>
    </body>
</html>
