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
                <div class="title">Benvingut al joc del Penjat</div>
                <div class="description"><p>Has d'acertar la paraula oculta abans de completar-se el ninot penjat. Cada error li afegirà una part del cos!</p></div>
                <div id="screenshot">
                    <img src="http://placehold.it/200x200">
                </div>

               <?php

                    $partida = new App\Classes\Partida;
                    $paraula = $partida->getParaula();
                    echo $paraula."</br>";
//                $url = asset('storage/app/paraules.txt');
//                echo $url;

                    echo "El teu email és: ".session('em')."</br>";
                    echo "La teva contrasenya és: ".session('pw');
                ?>

                <div id="top-5">
                    <h2>Puntuacions Màximes</h2>
                    <p>Jugador 1: 0</p>
                    <p>Jugador 2: 0</p>
                    <p>Jugador 3: 0</p>
                    <p>Jugador 4: 0</p>
                    <p>Jugador 5: 0</p>
                </div>
            </div>

        </div>
    </body>
</html>
