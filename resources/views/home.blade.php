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
                background-color: rgb(201, 200, 34);
            }

            .header {
                display: flex;
                justify-content: space-around;
                height: 70px;
                background-color: rgb(96, 96, 96);
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
                color: black;
            }

            .main {
                display: flex;
                justify-content: center;
                align-items: center;
                height: calc(100vh - 70px);
                align-items: center;
            }

            .main-title {
                text-transform: uppercase;
                font-size: 50px;
            }


        </style>
        
    </head>

    <body>
        
        <div class="container">

            <div class="header">

                <div class="logo">

                    <h2>{{$titleHome}}</h2>
                        
                </div>

                <ul class="menu">

                    <li class="menu-li"><a class="menu-li-a" href="{{route('homepage')}}">Home</a></li>
                    <li class="menu-li"><a class="menu-li-a" href="{{route('chi-siamo')}}">About</a></li>
                    <li class="menu-li"><a class="menu-li-a" href="{{route('contatti')}}">Contatti</a></li>

                </ul>

            </div>

            <div class="main">

                <h3 class="main-title">{{$presentazione}}</h3>

            </div>
            
        </div>

    </body>
</html>
