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
                    <h2>Captura</h2>
                    <?php
                    $dir = 'images/';
                    echo '<img src="' . $dir . '/' . "captura.png" . '" alt="' . "captura.png" . '" />'
                    ?>
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
                    amb parse_str() filtrem la linea
                    */
                    //Llegim el arxiu tops.txt i el guardem en la matriu $fitxer
                    $path = storage_path('app/tops.txt');
                    $file = fopen($path,"r");

                    $i = 0;
                    while ( ! feof( $file ) ) {
                        $partidaGuardada = fgets($file);
                        parse_str($partidaGuardada, $output);
                        $fitxer[$i] = $output;
                        ++$i;
                    }
                    array_pop($fitxer);//Treïem l'últim element, que estaba buit
                    fclose($file);
                    //Treiem el top5
                    function cmp($a, $b) {return $b["punts"] - $a["punts"];}//Ordenació
                    usort($fitxer, "cmp");
                    //Mostrem les 5 puntuacions més altes
                    $array = $fitxer;
                    $i = 0;                         //Només volem treure els 5 primers
                    foreach ($array as &$valor) {
                        if($i >= 5){
                            break;
                        }
                        echo "<p>".$valor["email"].": ";
                        echo $valor["punts"]."</p>";
                        ++$i;
                    }
                    ?>


                </div>
            </div>

        </div>
    </body>
</html>
