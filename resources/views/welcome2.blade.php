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
                    <p class="redcolor">**La contrasenya ha de ser 6 caràcters alfanumèrics</p>
                    {!! Form::open(array('url' => '/nombre/afegirNombre')) !!}
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::text('email') !!}
                    {!! Form::label('pass', 'Contrasenya') !!}
                    {!! Form::password('pass') !!}
                    {!! Form::submit('Juga') !!}
                    {!! Form::close() !!}
                </div>

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
