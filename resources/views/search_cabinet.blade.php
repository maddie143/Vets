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

    <div class="col-12 p-0 first-impact" style="height: fit-content">
        <div class="row " style="margin:5px 0;">
            <div class="col-12 d-flex justify-content-center align-items-center" style="">
                <img src=".././public/logo.jpg" style="height:40px; "/>
            </div>

        </div>
        <div class="row" style="margin:5px 0;">
            <div class="col-12 d-flex justify-content-center align-items-center" style="margin:25px 0;">
                <h5 style="font-family: 'Major Mono Display', monospace;">CaBInETE vETErInarE</h5>
            </div>
        </div>
        <div class="row justify-content-center align-items-center" style="margin:5px 0;">
            <div class="col-10 col-sm-8 col-md-4 p-0 justify-content-center d-flex align-items-center" style="position: relative; height:50px;">
                <input type="text" class="" value="{{ $search }}" id="searchPlaceholder" placeholder="Search by name" style="width:100%;padding:0 5%;height:100%;border:none; outline:none; border-bottom:1px solid #BF6B63; border-right:1px solid #BF6B63" />
                <button id="filterButton" class="d-flex justify-content-center align-items-center search-icon" style="background-color:transparent; border:none; outline:none;position:absolute;height:100%; right:0 " >
                    <i class="fas fa-search search-icon" style="font-size:20px;margin:0 10px;"></i>
                </button>
            </div>
        </div>
        <div class="row justify-content-center align-items-center" style="margin:5px 0;">
             <div class="col-10 col-sm-8 col-md-4 p-0 justify-content-center d-flex align-items-center">
                <div class="row m-0 w-100 justify-content-center align-items-center">
                    <button id="filter" class="col-4 d-flex justify-content-center align-items-center" style="outline:none; border:none;background-color:transparent;text-decoration: none; color:#BF6B63; font-size:10px;">Filter</button>
                </div>
            </div>
        </div>
        <div id="form-filter-container" class="row m-0 justify-content-center align-items-center d-none">
            <form id="filterForm" action="{{ route('show_all_vet') }}" method="get" class="col-6" style="background-color:#D96C6C; padding:10px 0;border-radius:3px;">
                <input type="hidden" name="searchName" id="filterName" />
                <div class="row w-100 justify-content-center align-items-center m-0">
                    <div class="col-12 col-sm-11 d-flex form-group justify-content-center align-items-center" style="margin:1px 0;">
                        <select class="custom-select-sm form-control col-8 " id="select_county" style="" name="county">
                            <option value="">Select a county</option>
                            <option value="Brasov">Brasov</option>
                            <option value="Cluj">Cluj</option>
                            <option value="Ilfov">Ilfov</option>
                            <option value="Prahova">Prahova</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-11  d-flex form-group justify-content-center align-items-center" style="margin:1px 0;">
                        <select class="custom-select-sm form-control col-8 " id="select_city" style="" name="city">
                            <option value="">Select a city</option>
                            <option value="Cluj-Napoca">Cluj-Napoca</option>
                            <option value="Bucuresti">Bucuresti</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-11 d-flex form-group justify-content-center align-items-center" style="margin:1px 0;">
                        <select class="custom-select-sm form-control col-8 " id="select_service" style="" name="service">
                            <option value="">Select a service</option>
                            <option value="1">Serviciul 1</option>
                            <option value="2">Serviciul 2</option>
                            <option value="3">Serviciul 3</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-11 custom-control custom-switch d-flex form-group justify-content-center align-items-center" style="margin:1px 0;">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1" name="emergency">
                        <label class="custom-control-label" for="customSwitch1" style="color:white; font-size:15px;">Does it have an emergency department?</label>
                    </div>
                    <div class="col-12 col-sm-11 " style="padding-top:10px;">
                        <div class="row m-0 h-100 w-100 justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary w-100 col-4" style="border:none;height:40px;color:black;background-color:#F2F0F0; font-size:16px;text-align:center;">Filter</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <script>
            $("#filter").click(function(){
                var form_filter = $("#form-filter-container");
                if(form_filter.hasClass('d-none')){
                    form_filter.addClass("d-flex");
                    form_filter.removeClass("d-none");
                }
                else {
                    form_filter.addClass("d-none");
                    form_filter.removeClass("d-flex");
                }
            });
        </script>
        <div class="row justify-content-center align-items-center" style="margin:5px 0;">
            <!-- Start of one object of type Veterinary-->
            @foreach($vets as $vet)
            <div class="col-11" style="margin:5px 0;background-color: #40BA93;border-radius:3px;">
                <div class="row m-0 " style="height: fit-content;" >
                    <div class="col">
                        <div class="row m-0 h-100 align-items-center">
                            <span style="font-size:25px; color:white; text-align: center;">{{ $vet->user->name }}</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center" style="padding: 10px 0">
                        <div class="row m-0 h-100 ">
                            <div class="col-12 p-0 d-flex justify-content-center align-items-center">
                                <span style="font-size:10px; color:white;text-align: center;padding:2px 0;">{{ $vet->firm_name }}</span>
                            </div>
                            <div class="col-12 p-0 d-flex justify-content-center align-items-center">
                                <span style="font-size:10px; color:white;text-align: center;padding:2px 0;">{{ $vet->user->county }}</span>
                            </div>
                            <div class="col-12 p-0 d-flex justify-content-center align-items-center">
                                <span style="font-size:10px; color:white;text-align: center;padding:2px 0;">{{ $vet->user->city }}</span>
                            </div>
                            <div class="col-12 p-0 d-flex justify-content-center align-items-center">
                                <span style="font-size:10px; color:white;text-align: center;padding:2px 0;">{{ $vet->address }}</span>
                            </div>
                        </div>

                    </div>
                    <div class="col d-flex justify-content-end">
                        <a href="{{ route('show_vet', ["id" => $vet->id]) }}" class="d-flex align-items-center h-100">
                            <i class="fas fa-chevron-right" style="color:white"></i>
                        </a>
                    </div>

                </div>
            </div>
            @endforeach


            <!-- End of one object of type Veterinary-->
        </div>


    </div>

    <!-- Left menu -->
    @include('left_menu')
</div>

</body>
</html>
