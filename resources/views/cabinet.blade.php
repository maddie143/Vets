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
    <div class="col-12 p-0 first-impact " style="height: 100vh;">
        <div class="row m-0 p-0 w-100 justify-content-center align-items-center">
            <div class="col-8 d-flex justify-content-center align-items-center" style="padding:10px;border-bottom:1px solid black;">
                <h2>Cabinet name</h2>
            </div>
        </div>
        <table id="emergency" class="row m-0 p-0 w-100 justify-content-center align-items-center" >
            <tbody class="col-8" style="border-bottom:1px solid black; padding:10px 0;">
                <tr class="row justify-content-center align-items-center">
                    <td><h6> Urgente </h6></td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Urgente</td>
                    <td class="col-6 justify-content-center d-flex">DA</td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Program urgente</td>
                    <td class="col-6 justify-content-center d-flex">12-17 PM</td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Telefon urgente</td>
                    <td class="col-6 justify-content-center d-flex">076767612</td>
                </tr>
            </tbody>
        </table>

        <table id="details" class="row m-0 p-0 w-100 justify-content-center align-items-center" >
            <tbody class="col-8" style="border-bottom:1px solid black; padding:10px 0;">
            <tr class="row justify-content-center align-items-center">
                <td><h6> Detalii </h6></td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Oras</td>
                <td class="col-6 justify-content-center d-flex">DA</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Judet</td>
                <td class="col-6 justify-content-center d-flex">judet</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Adresa</td>
                <td class="col-6 justify-content-center d-flex">Eroilor 12</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Program</td>
                <td class="col-6 justify-content-center d-flex">12-19 PM</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Telefon</td>
                <td class="col-6 justify-content-center d-flex">443434343</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Telefon fix</td>
                <td class="col-6 justify-content-center d-flex">076767612</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Nume firma</td>
                <td class="col-6 justify-content-center d-flex">Firma SRL</td>
            </tr>
            </tbody>
        </table>


        <table id="servicii" class="row m-0 p-0 justify-content-center align-items-center">
            <thead class="col-8">
                <tr class="row justify-content-center align-items-center">
                    <th><h6> Servicii </h6></th>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <th class="col-6 justify-content-center d-flex ">Service</th>
                    <th class="col-6 justify-content-center d-flex">Price</th>

                </tr>
            </thead>
            <tbody class="col-8" style="border-bottom:1px solid black; padding:10px 0;">
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Tuns</td>
                    <td class="col-6 justify-content-center d-flex">25 LEI</td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Tuns</td>
                    <td class="col-6 justify-content-center d-flex">25 LEI</td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Tuns</td>
                    <td class="col-6 justify-content-center d-flex">25 LEI</td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Tuns</td>
                    <td class="col-6 justify-content-center d-flex">25 LEI</td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Tuns</td>
                    <td class="col-6 justify-content-center d-flex">25 LEI</td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Tuns</td>
                    <td class="col-6 justify-content-center d-flex">25 LEI</td>
                </tr>
            </tbody>

        </table>



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
