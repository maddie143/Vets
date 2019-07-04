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
                        <div class="row m-0 justify-content-center align-items-center" style="border-radius:2px;height:70px;background-color:#40BA93">
                            <div class="col-5">
                                <span style="color:white">Firm: {{ $vet->firm_name}} </span>
                            </div><div class="col-5">
                                <span style="color:white">Tel: {{ $vet->phone }}</span>
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
        @include('left_menu')
    </div>
</body>
</html>