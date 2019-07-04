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
            <form action="{{ route('add_service') }}" method="post" class="col-12 col-sm-10 col-m-8 col-lg-6 p-0" style=" min-height:50%; border-radius:3px;background-color: #40BA93; ">
                {{ csrf_field() }}
                <div class="row h-100 w-100 justify-content-center align-items-center m-0">
                    @if($errors->count() )
                        {{ $errors->first('registeringWithError') }}
                        {{ $errors->first('registeringSuccess') }}
                    @endif
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <h5 style="margin: 40px 0;color:white;font-family: 'Major Mono Display', monospace;">add a sErViCE</h5>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="height:50px;margin:3px 0">
                        <select name="service_combo" class="w-100 h-100" style="border:none; border-radius:2px;">
                            <option>Alegeti un serviciu</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="height:50px;margin:3px 0">
                        <input type="text" class="row w-100 h-100" name="service" id="service" placeholder="Adaugati un serviciu nou" style="border:none; border-radius:2px; padding:0 5px;"/>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        <input type="text" class="form-control " id="price" name="price" placeholder="Please enter the price" style="border:none; border-radius:2px; padding:0 5px;height:50px;">
                    </div>

                    <div class="col-12 col-sm-10 col-m-8" style="padding:20px;">
                        <div class="row m-0 h-100 w-100 justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary w-100 col-6" style="border:none;height:70px;color:black;background-color:#F2F0F0; font-size:16px;text-align:center;">Adauga serviciu</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>


    </div>

    <!-- Left menu -->
    @include('left_menu')
</div>

</body>
</html>
