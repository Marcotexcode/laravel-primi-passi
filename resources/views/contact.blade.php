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
                background-color: rgb(51, 110, 122);
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

            .main {
                display: flex;
                justify-content: center;
                align-items: center;
                height: calc(100vh - 70px);
                align-items: center;
                
            }

            .contatti {
                display: flex;
                flex-direction: column;
                text-align: center;
            }

            .contatti-title {
                font-size: 30px;
                text-transform: uppercase;
            }

            .contatti-elenco {
                list-style: none;
                padding: 20px;
                display: flex;
            }

            .contatti-elenco-li {
                margin: 0px 30px;
                font-size: 20px;
            }

            .contatti-elenco-li-a {
                text-transform: uppercase;
                text-decoration: none;
                color: black;
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

            <div class="main">

                <div class="contatti">

                    <h3 class="contatti-title">{{$titolo}}</h3>

                    <ul class="contatti-elenco">

                        @foreach($contatti as $contact )

                            <li class="contatti-elenco-li"><a class="contatti-elenco-li-a" href="">{{$contact}}</a></li>

                        @endforeach

                    </ul>

                </div>
               
            </div>
            
        </div>

    </body>
</html>
