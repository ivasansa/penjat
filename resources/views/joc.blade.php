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
                    $paraula = $partida->getParaula();
                    echo $paraula."</br>";

    //                $url = asset('storage/app/paraules.txt');
    //                echo $url;

                    $jugador = new App\Classes\Jugador;
                    $jugador->guardarTop("10");

                    echo "El teu email és: ".session('em')."</br>";
                    echo "La teva contrasenya és: ".session('pw');
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
