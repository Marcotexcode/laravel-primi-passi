<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>

        <div class="container">

            <div class="title m-b-md">

                <h2>HOME</h2>
                    
            </div>

            <ul>

                <li><a href="{{route('homepage')}}">Home</a></li>
                <li><a href="{{route('chi-siamo')}}">About</a></li>
                <li><a href="{{route('contatti')}}">Contatti</a></li>

            </ul>
            
        </div>

    </body>
</html>
