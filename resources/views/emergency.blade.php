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
    <div class="container-fluid content m-0 p-0" style="background-color:#F2F0F0; min-height:100vh;">
        <div class="row center-aligned m-0 justify-content-center align-items-center" style="padding:10px 0;">
            <h4>Sectiune urgenta</h4>
        </div>
        <div class="row center-aligned m-0 justify-content-center align-items-center" style=" padding:10px 0;">
            @if(isset($vets))
                @foreach($vets as $vet)
                    <div class="col-8" style="margin:2px 0;height:fit-content;">
                <div class="row m-0 justify-content-center align-items-center" style="height:70px;background-color:#40BA93">
                    <div class="col-5">
                        <span style="color:white">{{ $vet->user->name }}</span>
                    </div><div class="col-5">
                        <span style="color:white">{{ $vet->user->city }}</span>
                    </div>

                    <a href="{{ route('show_vet',['id' => $vet->user->id]) }}" class=" col-2" style="border:none; background-color:transparent; color:white;">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
                @endforeach
            @endif
        </div>

        <!-- Left menu -->
        <div style="position:fixed; top:20%;">
            <div id="menu-click" class=" d-flex justify-content-center align-items-center" style="border-bottom:1px solid white;width:30px; position:absolute; bottom:100%; height:30px; background-color:#BF6B63">
                <i class="fas fa-home" style="font-size:12px; color:white;"></i>
            </div>
        </div>
        <script>
            $("#menu-click").click(function(){
                var open_close_menu = $("#menu-click");
                var menu_container = $("#menu-container");
                if(menu_container.hasClass("d-none")){
                    $("#menu-click i").removeClass('fa-home');
                    $("#menu-click i").addClass('fa-times');
                    menu_container.addClass('d-block');
                    menu_container.removeClass('d-none');
                }
                else {
                    $("#menu-click i").removeClass('fa-times');
                    $("#menu-click i").addClass('fa-home');

                    menu_container.removeClass('d-block');
                    menu_container.addClass('d-none');
                }
            });
        </script>
        <div id="menu-container" class="col-1 p-0 d-none" style="width:90px;position:fixed;top:20%;border-radius:0 3px 3px 3px ; height:400px; background-color:#BF6B63;">
            <div class="row m-0 p-0 h-100 w-100 justify-content-center " style="border-radius:0 5px 5px 0;">

                <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                    <a href="{{ route('show_homepage') }}" class="menu-text" style="text-decoration: none">HOME</a>
                </div>
                <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                    <a href="{{ route('show_all_vet') }}" class="menu-text" style="text-decoration: none">CABINETE</a>
                </div>
                <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                    <a href="{{ route('show_all_service') }}" class="menu-text" style="text-decoration: none">SERVICII</a>
                </div>
                <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                    <a href="{{ route('add_appointment') }}" class="menu-text" style="text-decoration: none">PROGRAMARI</a>
                </div>
                <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                    <a href="{{ route('show_emergency') }}" class="menu-text" style="text-decoration: none">URGENTE</a>
                </div>
                <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                    <a href="{{ route('show_login') }}" class="menu-text" style="text-decoration: none">CONT</a>
                </div>
            </div>
            <style>
                .menu-text {
                    color: #40302A;
                    font-size:12px;
                }
                .menu-option{
                    border-bottom: 1px solid #F2F0F0;
                }
                .menu-option:last-of-type {
                    border-bottom:none;
                }
            </style>

        </div>
    </div>
</body>
</html>