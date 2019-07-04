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
<div class="row container-fluid m-0 p-0" style="position:relative;background-color:#F2F0F0;">
    <div class="col-12 p-0 first-impact " style="margin:20px 0;">
        <div class="row m-0 p-0 w-100 justify-content-center align-items-center">
            <div class="col-8 d-flex justify-content-center align-items-center" style="padding:10px;border-bottom:1px solid black;">
                <h2>{{ $vet->firm_name }}</h2>
            </div>
        </div>
        <table id="emergency" class="row m-0 p-0 w-100 justify-content-center align-items-center" >
            <tbody class="col-8" style="border-bottom:1px solid black; padding:10px 0;">
                <tr class="row justify-content-center align-items-center">
                    <td><h6> Urgente </h6></td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Urgente</td>
                    <td class="col-6 justify-content-center d-flex">
                        @if ($vet->emergency)
                            DA
                        @else
                            NU
                        @endif
                    </td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Program urgente</td>
                    <td class="col-6 justify-content-center d-flex">
                        {{ $vet->emergency_schedule }}
                    </td>
                </tr>
                <tr class="row justify-content-center align-items-center">
                    <td class="col-6 justify-content-center d-flex ">Telefon urgente</td>
                    <td class="col-6 justify-content-center d-flex">
                        {{ $vet->phone }} / {{ $vet->phoneF }}
                    </td>
                </tr>
            </tbody>
        </table>

        <table id="details" class="row m-0 p-0 w-100 justify-content-center align-items-center" >
            <tbody class="col-8" style="border-bottom:1px solid black; padding:10px 0;">
            <tr class="row justify-content-center align-items-center">
                <td><h6> Detalii </h6></td>
            </tr>
            {{--<tr class="row justify-content-center align-items-center">--}}
                {{--<td class="col-6 justify-content-center d-flex ">Oras</td>--}}
                {{--<td class="col-6 justify-content-center d-flex">{{ $vet->user->city }}</td>--}}
            {{--</tr>--}}
            {{--<tr class="row justify-content-center align-items-center">--}}
                {{--<td class="col-6 justify-content-center d-flex ">Judet</td>--}}
                {{--<td class="col-6 justify-content-center d-flex">{{ $vet->user->county }}</td>--}}
            {{--</tr>--}}
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Adresa</td>
                <td class="col-6 justify-content-center d-flex">{{ $vet->address }}</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Program</td>
                <td class="col-6 justify-content-center d-flex">{{ $vet->schedule }}</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Telefon</td>
                <td class="col-6 justify-content-center d-flex">{{ $vet->phone }}</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Telefon fix</td>
                <td class="col-6 justify-content-center d-flex">{{ $vet->phoneF }}</td>
            </tr>
            <tr class="row justify-content-center align-items-center">
                <td class="col-6 justify-content-center d-flex ">Nume firma</td>
                <td class="col-6 justify-content-center d-flex">{{ $vet->firm_name }}</td>
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

            <tbody class="col-8" style=" padding:10px 0;">
                @if ($vet->services->count() > 0)
                    @foreach ($vet->services as $service)
                        <tr class="row justify-content-center align-items-center">
                            <td class="col-6 justify-content-center d-flex ">{{ $service->name }}</td>
                            <td class="col-6 justify-content-center d-flex">{{ $service->pivot->price }} LEI</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>

        </table>
        <div class="row m-0 p-0 justify-content-center align-items-center" style="">
            <a href="{{ route('add_appointment') }}" class="h-100" style="height:100px; padding:10px 20px;background-color:#40BA93; color:white; text-decoration: none;">
                Adauga programare
            </a>
        </div>



    </div>

    <!-- Left menu -->
    @include('left_menu')
</div>

</body>
</html>
