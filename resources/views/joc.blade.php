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
                $jugador = new App\Classes\Jugador;

                if(session('newgame')){
                    //extreu la paraula a endevinar
                    $paraula = $partida->getParaula();
                    //crea el vector de "_"
                    $solucio = $partida->getSolucio($paraula);//String de "_"
    //                $img = storage_path('app/paraules.txt');
                    session(['newgame' => false]);
                    session(['solucio' => $solucio]);
                    session(['paraula' => $paraula]);
                }

                $paraula = session('paraula');
                $solucio = session('solucio');

                $error = session('er');

                //Busca lletra
                $off = 0;
                $pos = strpos($paraula, session('lletra'), $off);
                $punts = session('punts');
                //Si no troba el caràcter, suma 1 error
                if($pos === false){
                    session(++$error);
                    session(['er' => $error]);
                }
                else{
                // Si el caràcter existeix
                    while($pos !== false) {
                        $solucio[$pos] = session('lletra');
                        $off=$pos+1;
                        $pos = strpos($paraula, session('lletra'), $off);
                        ++$punts;
                        session(['solucio' => $solucio]);
                    }
                }
                echo "<p id=solucio>".$solucio."</p>"."</br>";
                if($error == 6){
                    echo "Has perdut, prem el botó torna per anar a la pàgina inicial.</br>";
                }

                //actualitza els punts a la sessio
                session(['punts' => $punts]);

                //acaba el joc
                if($punts+1 == strlen($paraula)){
                    echo "Has guanyat!, prem el botó de torna per anar a la pàgina inicial.</br>";
                    $jugador->guardarTop($punts);
                }

//                pinta penjat
                $partida->getEstat($error);

                //Debugger utilitzant el mètode màgic toString
                //echo($jugador);
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
