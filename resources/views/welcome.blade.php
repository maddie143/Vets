<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

        <!-- Font awesome kit-->
        <script src="https://kit.fontawesome.com/cc7fcff356.js"></script>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Major+Mono+Display&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="row container-fluid m-0 p-0 " style="position:relative;background-color:#F2F0F0; height:fit-content">

            <div class="col-12 p-0 first-impact" style="height: 100vh;  background-image:url('.././public/background2.png');background-size:100% 80% ;background-repeat: no-repeat;background-position:0 0 ;transform:scale(1)">
                <div class="row m-0" style="height: 80%;">
                    <div class="col-12 d-flex justify-content-center align-items-center" style="height: 10%;padding:5px;">
                    </div>

                    <div class="col-12" style="height:90%;padding:10px;">
                        <div class="row m-0 p-0 h-100">
                            <div class="col-10 offset-1 justify-content-center d-flex align-items-end" >
                                <h2 style="background-color:rgba(255,255,255,0.85);text-align:center;font-family: 'Arvo', serif;color:#bf6b63">De cate ori ai petrecut ore in sir pentru a gasi un cabinet veterinar bun pentru animalutul tau?</h2>
                            </div>
                            <div class="col-8 offset-2 justify-content-center d-flex align-items-end">
                                <span style="background-color:rgba(255,255,255,0.85);color:#bf6b63;font-size:16px;font-family: 'Roboto Mono', monospace; text-align:center">Incearca cautarea noastra si vezi care cabinet veterinar se potriveste nevoilor animalutului tau</span>
                            </div>
                            <div class="col-4 offset-8 p-0 d-flex justify-content-center align-items-center">
                                <a href="{{ route('show_login') }}" style="text-decoration:none;color:black;padding:25px 40px;background-color:rgba(255,255,255,0.75);border-radius:2px; border:1px solid #731F35"> Descopera</a>
                            </div>
                        </div>
                    </div>
                    <style>

                    </style>
                </div>
                <div class="row m-0 p-0 justify-content-center" style="height: 20%;">
                    <div class="col d-flex justify-content-center align-items-center" style="margin:4px;border-radius:2px;background-color:#40BA93;">
                        <a href="{{ route("show_all_vet") }}" style="text-decoration: none; color:#0D0D0D; font-size:30px;font-family: 'Major Mono Display', monospace;">CabInETE</a>
                    </div>
                    @if((\Auth::user() && \Auth::user()->profile_type == 1) || (!\Auth::user()))
                    <div class="col d-flex justify-content-center align-items-center" style="margin:4px;border-radius:2px;background-color:#40BA93;">
                        <a href="{{ route('add_appointment') }}" style="text-decoration: none; color:#0D0D0D; font-size:30px;font-family: 'Major Mono Display', monospace;">PrOGraMarI</a>
                    </div>
                    @endif
                    <div class="col d-flex justify-content-center align-items-center" style="margin:4px;border-radius:2px;background-color:#40BA93;">
                        <a href="{{ route("show_dashbord") }}" style="text-decoration: none; color:#0D0D0D; font-size:30px;font-family: 'Major Mono Display', monospace;">COnT</a>
                    </div>
                </div>

            </div>



            <!-- Left menu -->
            @include('left_menu')
        </div>

    </body>
</html>
