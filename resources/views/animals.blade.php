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
            <form action="{{ route('add_animal_process') }}" method="post" class="col-12 col-sm-10 col-m-8 col-lg-6 p-0" style=" min-height:50%; border-radius:3px;background-color: #40BA93; ">
                {{ csrf_field() }}
                <div class="row h-100 w-100 justify-content-center align-items-center m-0">

                    <div class="col-12 d-flex justify-content-center align-items-center">
                        <h5 style="margin: 40px 0;color:white;font-family: 'Major Mono Display', monospace;">aDD an anIMaL</h5>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        {{ $errors->first('name') }}
                        <input type="text" class="form-control " id="nume" name="name" placeholder="Name" style="height:50px;text-align:center;">

                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        {{ $errors->first('email') }}
                        <input type="date" class="form-control" id="data" name="data"  style="height:50px;text-align:center;">

                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="height:50px;margin:3px 0">
                        <select name="gender" class="h-100 w-100">
                            <option value="female">Female</option>
                            <option value="masculin">Masculin</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="height: 50px;margin:3px 0">
                        <select name="specie" class="h-100 w-100">
                                <option selected>Alegeti o specie</option>
                                <option value="1">Bernard</option>
                                <option value="2">Schnauzer</option>
                                <option value="3">Terrieri</option>
                                <option value="4">Pudel</option>
                                <option value="5">Chihuahua</option>
                                <option value="6">Pekinez</option>
                                <option value="7">Whippet</option>



                        </select>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="height: 50px;margin:3px 0">
                        <select name="race" class="h-100 w-100">
                                <option selected>Alegeti o rasa</option>
                                <option value="1">Ciobanesc romanesc</option>
                                <option value="2">Bull terrier</option>
                                <option value="3">Toy terrier</option>
                                <option value="4">Bergamasco</option>
                                <option value="5">Bulldog Englez</option>
                                <option value="6">Pechinez papion</option>
                                <option value="7">Bischon maltez</option>
                                <option value="8">Bischon toy</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        <input type="text" class="form-control" id="color" name="color" placeholder="Color" style="height:50px;text-align:center;">
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        <input type="text" class="form-control" id="particular_signs" name="particular_signs" placeholder="Particular signs" style="height:50px;text-align:center;">
                    </div>
                    <div class="col-12 col-sm-10 col-m-8 d-flex form-group justify-content-center align-items-center" style="margin:3px 0">
                        <input type="text" class="form-control" id="identification_code" name="identification_code" placeholder="Identification code" style="height:50px;text-align:center;">
                    </div>
                    <div class="col-12 col-sm-10 col-m-8" style="padding:20px;">
                        <div class="row m-0 h-100 w-100 justify-content-center align-items-center">
                            <button type="submit" class="btn btn-primary w-100 col-6" style="border:none;height:70px;color:black;background-color:#F2F0F0; font-size:16px;text-align:center;">Add animal</button>
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
