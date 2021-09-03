<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>

        <style>

            body {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            .header {
                display: flex;
                justify-content: space-around;
                height: 70px;
                background-color: rgb(201, 200, 34);
                align-items: center;
            }

            .menu {
                display: flex;

            }

            .menu-li {
                margin: 0px 20px;
                list-style: none;
            }

            .menu-li-a {
                text-decoration: none;
                font-size: 16px;
                text-transform: uppercase;
                color: gray;
            }
            
            .logo {
                color: gray;
            }

        </style>

    </head>
    <body>
        
        <div class="container">

            <div class="header">

                <div class="logo">

                    <h2>{{$titleContact}}</h2>
                        
                </div>

                <ul class="menu">

                    <li class="menu-li"><a class="menu-li-a" href="{{route('homepage')}}">Home</a></li>
                    <li class="menu-li"><a class="menu-li-a" href="{{route('chi-siamo')}}">About</a></li>
                    <li class="menu-li"><a class="menu-li-a" href="{{route('contatti')}}">Contatti</a></li>

                </ul>

            </div>
            
        </div>

    </body>
</html>
