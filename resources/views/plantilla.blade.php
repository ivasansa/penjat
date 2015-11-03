<!--//resources/views-->
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel - @yield('titol')</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{{ asset('/estils.css') }}}" rel="stylesheet">
    </head>
    <body>
        @section('titol')

        @show

        <section>
            @yield('contingut')
        </section>
    </body>
</html>
