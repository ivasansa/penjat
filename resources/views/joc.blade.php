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
                //crea el vector de "_"
                $solucio = $partida->getSolucio($paraula);//String de "_"
//                $img = storage_path('app/paraules.txt');

                //pinta el dibuix del penjat
                $partida->getEstat(session('er'));


                echo $paraula."</br>";
                echo $solucio."</br>";
//                session(['pa' => $paraula]);



                echo session('lletra');
                echo "</br>";
                echo session('er');

//              $url = asset('storage/app/paraules.txt');
//              echo $url;



                //Finalitza joc
//                $jugador = new App\Classes\Jugador;
//                $jugador->guardarTop("10");
                echo "</br>";
                echo "El teu email és: ".session('em')."</br>";
                echo "La teva contrasenya és: ".session('pw');
                echo "</br>";

                $off = 0;
            $pos = strpos($paraula, session('lletra'), $off); // $pos = 7, no 0
                // Si el caràcter existeix
                while($pos !== false) {
                    $solArray = str_split($solucio);


                    $off=$pos+1;
                    $pos = strpos($paraula, session('lletra'), $off);
                    echo "hola";
                }

                echo $pos;

                ?>


                <div id="arrayParaula">

                    {!! Form::open(array('url' => '/introduccioLletra')) !!}

                    {!! Form::text('lletra') !!}

                    {!!  Form::submit('Prova Lletra') !!}
                    {!! Form::close() !!}
                </div>


            </div>

        </div>
    </body>
</html>
