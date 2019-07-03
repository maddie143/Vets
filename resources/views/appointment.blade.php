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
<div class="row container-fluid m-0 p-0 " style="position:relative;background-color:#F2F0F0; height:100vh">
    <div class="col-12 p-0 first-impact d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="row m-0 p-0 w-100 h-100 justify-content-center align-items-center">
            <form action="{{ route('process_register') }}" method="post" class="col-12 col-sm-10 col-m-8 col-lg-6 p-0" style=" min-height:50%; border-radius:3px;background-color: #D96C6C; ">
                {{ csrf_field() }}
                <div class="row h-100 w-100 justify-content-center align-items-center m-0">


                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <h5 style="margin: 40px 0;color:white;font-family: 'Major Mono Display', monospace;">maKE an aPPOInmEnT</h5>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        <select name="vet" id="vet" class="w-100" style="height:50px;border-radius:.25em; text-align:center">
                            <option>Please select your pet</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">

                        <select name="vet" id="vet" class="w-100" style="height:50px;border-radius:.25em; text-align:center">
                            <option>Please select a vet</option>
                            @foreach( $vets as $vet)
                                <option>{{ $vet->user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        <select name="service" id="service" class="w-100" style="height:50px;border-radius:.25em; text-align:center">
                            <option>Please select a service</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        <input type="date" class="form-control" id="data" name="data" placeholder="Please enter your city name" style="height:50px;text-align:center;">
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        <input type="text" class="form-control" id="hour" name="hour" placeholder="12:30 PM" style="height:50px;text-align:center;">
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        <input type="text" class="form-control" id="medic" name="medic" placeholder="Medic name (optional)" style="height:50px;text-align:center;">
                    </div>

                    <div class="col-12 col-sm-10 col-m-8 d-flex justify-content-center align-items-center" style="padding:10px 0;">
                        {{ $errors->first('type') }}

                        <div class="row custom-control custom-radio" style="display: inline">
                            <div class="col-12" style="padding:3px 0;">
                                <input type="radio" class="custom-control-input" id="customRadio" name="confirm" value="0">
                                <label class="custom-control-label" for="customRadio" style="color:white;">I want to confirm via e-mail</label>
                            </div>
                            <div class="col-12" style="padding:3px 0;">
                                <input type="radio" class="custom-control-input" id="customRadio1" name="confirm" value="1">
                                <label class="custom-control-label" for="customRadio1" style="color:white;">I want to confirm via telephone</label>
                            </div>

                        </div>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8" style="padding:20px;">
                        <div class="row m-0 h-100 w-100 justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary w-100 col-6" style="border:none;height:70px;color:black;background-color:#F2F0F0; font-size:16px;text-align:center;">Adauga programarea</button>
                        </div>
                    </div>
                    <a href="{{ route('show_homepage') }}" class="col-12" style="text-decoration:none;text-align:center;background-color: transparent;font-size:12px; border: none; outline:none; color:white">
                        Renunta
                    </a>
                </div>

            </form>
        </div>


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
                <a href="#" class="menu-text" style="text-decoration: none">SERVICII</a>
            </div>
            <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                <a href="#" class="menu-text" style="text-decoration: none">PROGRAMARI</a>
            </div>
            <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                <a href="#" class="menu-text" style="text-decoration: none">URGENTE</a>
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
