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
        <div class="row container-fluid m-0 p-0 " style="position:relative;background-color:#F2F0F0; height:1000px">
            <!--<div class="col-12">
                <div class="row m-0 justify-content-center align-content-center">
                    <div class="col-7" style="position:relative;height:40px;background-color:#BF907E; border-radius:5px;">
                        <ul class="row" id="navigation-menu">
                            <li class="col p-0"><a>HOME</a></li>
                            <li class="col p-0"><a>CABINETE</a></li>
                            <li class="col p-0"><a>SERVICII</a></li>
                            <li class="col p-0"><a>PROGRAMARI</a></li>
                            <li class="col p-0"><a>URGENTA</a></li>
                            <li class="col p-0"><a>CONT</a></li>
                        </ul>
                        <style>
                            #navigation-menu {
                                list-style-type:none;
                                margin:0;
                                padding:0;
                                height:40px;
                                font-family:'Arial', sans-serif;
                                font-size:12px;
                            }
                            #navigation-menu li {
                                float:left;
                                height:30px;
                                line-height:30px;
                            }
                            #navigation-menu li a {
                                display:block;
                                padding:0 5px;
                                color:#FFF;
                                text-decoration:none;
                            }
                            #navigation-menu li a:hover {
                                background-color:#900;
                                text-decoration:none;
                            }
                        </style>
                        <div style="position:absolute; right:100%; top:0; height:40px; width:40px;border:none;border-top:20px solid transparent;border-right:40px solid #BF907E;border-radius:12px; border-bottom:20px solid transparent; "></div>
                        <div style="position:absolute; left:100%; top:0; height:40px; width:40px;border:none;border-top:20px solid transparent;border-left:40px solid #BF907E;border-radius:12px; border-bottom:20px solid transparent; "></div>

                    </div>
                </div>
            </div>
            -->
            <div class="col-12 p-0 first-impact" style="height: 100vh;  background-image:url('.././public/background2.png');background-size:100% 80% ;background-repeat: no-repeat;background-position:0 0 ;transform:scale(1)">
                <div class="row m-0" style="height: 80%;">
                    <div class="col-12 d-flex justify-content-center align-items-center" style="height: 10%;padding:5px;">
                        <img src=".././public/logo.jpg" style="height:40px;"/>
                    </div>

                    <div class="col-12" style="height:90%;padding:10px;">
                        <div class="row m-0 p-0 h-100">
                            <div class="col-10 offset-1 justify-content-center d-flex align-items-end">
                                <h2 style="text-align:center;font-family: 'Arvo', serif;">De cate ori ai petrecut ore in sir pentru a gasi un cabinet veterinar bun pentru animalutul tau?</h2>
                            </div>
                            <div class="col-8 offset-2 justify-content-center d-flex align-items-end">
                                <span style="font-size:16px;font-family: 'Roboto Mono', monospace; text-align:center">Incearca cautarea noastra si vezi care cabinet veterinar se potriveste nevoilor animalutului tau</span>
                            </div>
                            <div class="col-4 offset-8 p-0 d-flex justify-content-center align-items-center">
                                <span style="padding:25px 40px;border-radius:2px; border:1px solid #731F35"> Descopera</span>
                            </div>
                        </div>
                    </div>
                    <style>

                    </style>
                </div>
                <div class="row m-0 p-0 justify-content-center" style="height: 20%;">
                    <div class="col d-flex justify-content-center align-items-center" style="margin:4px;border-radius:2px;background-color:#40BA93;">
                        <a href="" style="text-decoration: none; color:#0D0D0D; font-size:30px;font-family: 'Major Mono Display', monospace;">CabInETE</a>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center" style="margin:4px;border-radius:2px;background-color:#40BA93;">
                        <a href="" style="text-decoration: none; color:#0D0D0D; font-size:30px;font-family: 'Major Mono Display', monospace;">PrOGraMarI</a>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center" style="margin:4px;border-radius:2px;background-color:#40BA93;">
                        <a href="" style="text-decoration: none; color:#0D0D0D; font-size:30px;font-family: 'Major Mono Display', monospace;">COnT</a>
                    </div>
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
                        <a href="{{ route('show_all_service') }}" class="menu-text" style="text-decoration: none">SERVICII</a>
                    </div>
                    <div class="col-10 m-0 p-0 d-flex justify-content-center align-items-center menu-option" style="">
                        <a href="{{ route('add_appointment') }}" class="menu-text" style="text-decoration: none">PROGRAMARI</a>
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
