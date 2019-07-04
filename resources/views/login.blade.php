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

            <form action="{{ route('process_login') }}" method="post" class="col-12 col-sm-10 col-m-8 col-lg-6 p-0 d-flex justify-content-center align-items-center" style=" min-height:70%; border-radius:3px;background-color: #40BA93; position:relative ">
                {{ csrf_field() }}
                <div class="row h-100 w-100 justify-content-center align-items-center m-0">
                    @if($errors->count() )
                        {{ $errors->first('logging') }}
                    @endif
                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <h5 style="margin: 40px 0;color:white;font-family: 'Major Mono Display', monospace;">LOG In</h5>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8">
                        <div class="row form-group justify-content-center align-items-center" style="margin:3px 0;">
                            {{ $errors->first('username') }}
                            <input type="text" autocomplete="false" class="form-control" id="username" name="username" placeholder="Please enter your username" style="text-align:center;height:50px;">
                        </div>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8">
                        <div class="row form-group justify-content-center align-items-center" style="margin:3px 0;">
                            {{ $errors->first('password') }}
                            <input type="password" autocomplete="false" class="form-control" id="password" name="password" placeholder="Please enter your password" style="text-align:center;height:50px;">
                        </div>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8" style="padding:20px;">
                        <div class="row m-0 h-100 w-100 justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary w-100 col-6" style="border:none;height:70px;color:black;background-color:#F2F0F0; font-size:16px;">Login</button>
                        </div>
                    </div>
                </div>
                <div style="position:absolute; top:95%">
                    <a href="{{ route('show_register') }}" style="text-decoration:none;font-size:12px; color:white">Create a new account</a>
                </div>
            </form>
        </div>


    </div>

    <!-- Left menu -->
    @include('left_menu')
</div>

</body>
</html>
