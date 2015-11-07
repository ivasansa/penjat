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

                <div id="login">
                    <h2>Login</h2>
                    <p>**La contrasenya ha de ser 6 caràcters alfanumèrics</p>
                    {!! Form::open(array('url' => '/login')) !!}
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email') !!}
                    {!! Form::label('pass', 'Contrasenya') !!}
                    {!! Form::password('pass') !!}
                    {!!  Form::submit('Juga') !!}
                    {!! Form::close() !!}
                </div>

                <div id="top-5">
                    <h2>Puntuacions Màximes</h2>
                    <?php
                    /*
                    Per treure el top5, llegim l'axiu tops.txt
                    Extreiem el contigut de la linea, que conté email pass punts
                    amb explode() filtrem la linea
                    */
                    $path = storage_path('app/tops.txt');
                    $file = fopen($path,"r");
                    $puntMax = 0;

//                    if ($file) {
                        while ( ! feof( $file ) ) {
//
                            $partidaGuardada = fgets($file);

                            parse_str($partidaGuardada);


                            if($puntMax < $punts){

                            }


                            echo "<p>".$email.": ";  // value
                            echo $punts."</p>"; // foo bar
                        }

//                    }
                    fclose($file);
//
//                        $partidaGuardada = fgets($file);
//                        list($email, $pass, $punt) = explode(" ", $partidaGuardada);
//                        echo "<p>".$email.": ".$punt."</p></br>";
//                    fclose($file);

                    ?>

<!--
                    <h2>Puntuacions Màximes</h2>
                    <p>Jugador 1: 0</p>
                    <p>Jugador 2: 0</p>
                    <p>Jugador 3: 0</p>
                    <p>Jugador 4: 0</p>
                    <p>Jugador 5: 0</p>
-->

                </div>
            </div>

        </div>
    </body>
</html>
