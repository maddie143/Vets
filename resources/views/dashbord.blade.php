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
    <div class="container-fluid content m-0 p-0">
        <div class="row center-aligned m-0 p-0 ">
            <div class="col-12  m-0 p-0 content-container" style="min-height: 100vh;background-color:#ecf2e9;flex-direction:column; height:100%;display:flex;">
                <div class="empty-space" style="height:7em;"></div>
                <div class="row logged-in m-0 " style="height:fit-content">
                    <div class="col-4 m-0 p-0" style="">
                        <div class="row m-0 p-0" style="height:50px; background-color: #AD5757;width:50px">
                            <a href="{{ route('show_homepage') }}" class="link-no-decoration justify-content-center d-flex align-items-center center-aligned w-100 h-100" style="width:fit-content;color:white;">
                                <i class="fas fa-home"></i>
                            </a>
                        </div>
                        @if(\Auth::user()->profile_type == 1)
                            @include('partials.dashboard.client_menu')
                        @else
                            @include('partials.dashboard.vet_menu')
                        @endif

                    </div>
                    <div class="col-8 m-0 p-0" style="height:fit-content">
                        @if(isset($user_appointments))
                        <div id="appointments-tab" class="d-flex tabs row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5 style="margin:0;"> Programari </h5>
                            </div>
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <a href="{{ route('add_appointment') }}" style="background-color: transparent; border:none; outline:none; color:#D96C6C">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>

                            <!-- Appointment -->

                                @foreach($user_appointments as $appointment)
                                    <div class="col-10" style="margin:2px 0;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-5">
                                        <span style="color:white">{{ $appointment->data }}</span>
                                    </div>
                                    <div class="col-5">
                                        <h6 style="margin: 0;color:white">{{ $appointment->service->name }}</h6>
                                    </div>
                                    <div class="col-2">
                                        <button class="show_appointment_details" style="color:white;background: transparent; border:none; outline:none;">
                                            <i class="fas fa-chevron-right"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="row m-0 d-none appointment_details" style="border:1px solid #40BA93;padding:10px 0; ">

                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Cabinet:</span>
                                        <span style="font-size:17px;">{{ $appointment->admin->user->name }}</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Numar telefon cabinet:</span>
                                        <span style="font-size:17px;">{{ $appointment->admin->phone }}</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Animal:</span>
                                        <span style="font-size:17px;">{{ $appointment->animal->name }}</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Serviciu:</span>
                                        <span style="font-size:17px;">{{ $appointment->service->name }}</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Data si ora:</span>
                                        <span style="font-size:17px;">{{ $appointment->data  }}{{ $appointment->hour }}</span>
                                    </div>
                                    <div class="col-12">
                                        @if($appointment->confirmation == 1)
                                            <span style="font-size:15px; font-weight: bold;">Confirmata</span>
                                        @else
                                            <span style="font-size:15px; font-weight: bold;">Neconfirmata</span>

                                        @endif
                                    </div>
                                    <div class="col-10" style="height:45px;">
                                        <div class="row m-0 h-100 ">
                                            <a href="{{ route('cancel_appointment',['id' => $appointment->id]) }}" id="client_cancel_appointment" class="col-5 h-100 d-flex justify-content-center align-items-center" style="text-decoration:none;height:50px;color:white; border-radius:2px; background-color: #40BA93">
                                                Anuleaza
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach


                        </div>
                        @endif

                        @if(isset($appointments))
                        <div id="appointments-vet-tab" class="d-flex tabs row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5 style="margin:0;"> Programari </h5>
                            </div>


                                @foreach($appointments as $appointment)
                                    <div class="col-10" style="margin:2px 0;height:fit-content;">
                                        <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                            <div class="col-5">
                                                <span style="color:white">{{ $appointment->date }}</span>
                                            </div>
                                            <div class="col-5">
                                                <h6 style="margin: 0;color:white">{{ $appointment->service->name }}</h6>
                                            </div>
                                            <div class="col-2">
                                                <button class="show_appointment_details" style="background-color:transparent; outline:none; color:white; border:none;">
                                                    <i class="fas fa-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row m-0 d-none appointment_details" style="border:1px solid #40BA93;padding:10px 0; ">

                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Client:</span>
                                                <span style="font-size:17px;">{{ $appointment->client->user->name }}</span>
                                            </div>
                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Numar telefon client:</span>
                                                <span style="font-size:17px;">{{ $appointment->client->phone }}</span>
                                            </div>
                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Animal:</span>
                                                <span style="font-size:17px;">{{ $appointment->animal->name}}</span>
                                            </div>
                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Serviciu:</span>
                                                <span style="font-size:17px;">{{ $appointment->service->name }}</span>
                                            </div>
                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Data si ora:</span>
                                                <span style="font-size:17px;">{{ date("d.m.Y, H:i:s", strtotime($appointment->date)) }}</span>
                                            </div>
                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">
                                                    @if($appointment->confirmation)
                                                        Confirmata
                                                    @else
                                                        Neconfirmata
                                                    @endif
                                                </span>
                                            </div>
                                            <div class="col-10" style="height:50px;">
                                                <div class="row m-0 h-100 ">
                                                    @if (! $appointment->confirmation)
                                                        <a class="col-5 h-100 d-flex justify-content-center align-items-center" style="background-color:#40BA93; text-decoration: none; border-right:1px solid #308562; color:white" href="{{ route("confirm_appointment", ["id" => $appointment->id]) }}">
                                                            Confirma
                                                        </a>
                                                    @endif
                                                    <a class="col-5 h-100 d-flex justify-content-center align-items-center" style="background-color:#40BA93; text-decoration: none; color:white"  href="{{ route("cancel_appointment", ["id" => $appointment->id]) }}">
                                                        Anuleaza
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach



                        </div>
                        @endif


                        @if(isset($services))
                        <div id="services-tab" class="d-none tabs row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5> Servicii </h5>
                            </div>
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <a href="{{ route('show_service') }}" style="background-color: transparent; border:none; outline:none; color:#D96C6C">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>


                            <!-- Serviciu -->

                                @foreach($services as $service)

                                    <div class="col-10" style="margin:2px 0;height:fit-content;">
                                        <form method="post" action="{{ route('modify_service',['id' => $service->id]) }}" class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                            {{ csrf_field() }}
                                            <div class="col-3 col-md-6">
                                                <input type="text" name="modifyServiceName" value="{{ $service->name }}" style="width:50px;background-color: transparent; border:none; color:black" />
                                            </div>
                                            <div class="col-3 col-md-2">
                                                <input type="text" name="modifyServicePrice" value="{{ $service->pivot->price }}"  style="width:50px;background-color: transparent; border:none; color:black" />
                                            </div>
                                            <button type="submit" class="modifyService col-3 col-md-2" style="border:none; background-color:transparent; color:white;">Modifica</button>
                                            <a href="{{ route('delete_service',['id' => $service->id]) }}" class="deleteService col-3 col-md-2" style="border:none; background-color:transparent; color:white;">Sterge</a>
                                        </form>
                                    </div>

                                @endforeach


                        </div>
                        @endif

                        @if(isset($animals))
                        <div id="animals-tab" class="tabs d-none row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-12 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5> Animalele mele </h5>
                            </div>
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <a href="{{ route('add_animal') }}" style="background-color: transparent; border:none; outline:none; color:#D96C6C">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>
                            <!-- Animal -->
                                @foreach($animals as $animal)
                                    <div class="col-10 col-md-6" style="margin:2px 0;padding:0 2px;height:fit-content;">
                                        <div class="row m-0 justify-content-center align-items-center" style="border-radius:2px;height:100px;background-color:#40BA93">
                                            <div class="col-7 justify-content-center align-items-center d-flex">
                                                <span style="color:white; font-size:20px;">{{ $animal->name }}</span>
                                            </div>
                                            <div class="col-5 d-flex justify-content-center align-items-center">
                                                <button class="show_animal_details" style="background-color:transparent; border:none; outline:none;color:white">
                                                    <i class="fas fa-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="row m-0 d-none animals_details" style="border:4px solid #40BA93;padding-top:10px; ">

                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Nume:</span>
                                                <span style="font-size:17px;">{{ $animal->name }}</span>
                                            </div>
                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Data nasterii:</span>
                                                <span style="font-size:17px;">{{ $animal->date_of_birth }}</span>
                                            </div>
                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Sex:</span>
                                                <span style="font-size:17px;">{{ $animal->gender }}</span>
                                            </div>
                                            {{--<div class="col-12">--}}
                                                {{--<span style="font-size:15px; font-weight: bold;">Specie:</span>--}}
                                                {{--<span style="font-size:17px;">{{ $animal->specie }}</span>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-12">--}}
                                                {{--<span style="font-size:15px; font-weight: bold;">Rasa:</span>--}}
                                                {{--<span style="font-size:17px;">{{ $animal->race }}</span>--}}
                                            {{--</div>--}}
                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Culoare</span>
                                                <span style="font-size:17px;">{{ $animal->color }}</span>
                                            </div>
                                            <div class="col-12">
                                                    <span style="font-size:15px; font-weight: bold;">Semne particulare*</span>
                                                    <input style="display:inline;background-color:transparent;border:none;font-size:17px;" value="{{ $animal->particular_signs }}">
                                            </div>
                                            <div class="col-12">
                                                <span style="font-size:15px; font-weight: bold;">Cod identificare</span>
                                                <span style="font-size:17px;">{{ $animal->identification_code }}</span>
                                            </div>
                                            <button class="col-6" style="border:none;border-right:1px solid #348d6d;height:50px;background-color:#40BA93;  color:white">
                                                Modifica
                                            </button>
                                            <a href="{{ route('delete_animal',['id' => $animal->id]) }}" class="col-6 d-flex justify-content-center align-items-center" style="text-decoration:none;height:50px;background-color:#40BA93; border:none; color:white">
                                                Sterge
                                            </a>

                                        </div>
                                    </div>
                                @endforeach

                        </div>
                        @endif
                        @if(isset($admin))
                            <div id="emergency-tab" class="d-none tabs row m-0 p-0 justify-content-center align-items-center">
                                <div class="col-12 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                    <h5> Urgente </h5>
                                </div>

                                    <form class="col-10" action="{{route('save_emergency',['id' => $admin->admin->id])}}" method="post">
                                        {{ csrf_field() }}
                                        <div class="row form-group" style="margin-bottom:5px;">
                                            <label class="col-6">Exista sectiune de urgente?</label>
                                            <select class="col-6 " name="emergency" style="border:none; border-radius:2px;">
                                                @if($admin->admin->emergency == 0)
                                                    <option selected value="0">Nu</option>
                                                    <option value="1">DA</option>
                                                @else
                                                    <option value="0">Nu</option>
                                                    <option selected value="1">DA</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="row form-group" style="margin-bottom:5px;">
                                            <label class="col-6">Program urgente</label>
                                            <input name="emergency_program" type="text" class="col-6" placeholder="00:00 - 24:00" style="border:none; border-radius:2px;" value="{{ $admin->admin->emergency_schedule }}">
                                        </div>
                                        <div class="row form-group justify-content-center align-items-center">
                                            <button type="submit" class="col-6" style="height:50px; background-color:#40BA93; color:white;border:none;">Salveaza </button>
                                        </div>

                                    </form>

                            </div>
                        @endif
                        <div id="settings-tab" class="tabs d-none row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-12 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5> Setari cont </h5>
                            </div>
                            @if(isset($actualUser))
                            <form class="col-10" action={{route('saveChanges')}} method="post">
                                {{ csrf_field() }}
                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Nume</label>
                                    <input name="name" type="text" class="col-7" value="{{ $actualUser->name }}" style="border:none; border-radius:2px;">
                                </div>
                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Adresa email</label>
                                    <input name="email" type="email" class="col-7" value="{{ $actualUser->email }}" style="border:none; border-radius:2px;">
                                </div>

                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Parola noua</label>
                                    <input name="newPassword" type="password" class="col-7" style="border:none; border-radius:2px;">
                                </div>
                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Telefon</label>
                                    <input name="phone" type="text" class="col-7" value="{{ $actualUser->client->phone }}" style="border:none; border-radius:2px;">
                                </div>
                                <div class="row form-group justify-content-center align-items-center">
                                    <button type="submit" class="col-6" style="height:50px; background-color:#40BA93; color:white;border:none;">Salveaza </button>
                                </div>

                            </form>
                            @endif
                        </div>
                        <div id="settings-vet-tab" class="d-none tabs row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-12 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5> Setari cont </h5>
                            </div>
                            @if(isset($admin))
                                <form class="col-10" action={{route('saveChangesVet')}} method="post">
                                    {{ csrf_field() }}
                                    <div class="row form-group" style="margin-bottom:5px;">
                                        <label class="col-12 col-md-5">Nume</label>
                                        <input name="nameVet" readonly type="text" class="col-12 col-md-7" value="{{ $admin->name }}" style="border:none; border-radius:2px;">
                                    </div>
                                    <div class="row form-group" style="margin-bottom:5px;">
                                        <label class="col-12 col-md-5">Adresa email</label>
                                        <input name="emailVet" readonly type="email" class="col-12 col-md-7" value="{{ $admin->email }}" style="border:none; border-radius:2px;">
                                    </div>

                                    <div class="row form-group" style="margin-bottom:5px;">
                                        <label class="col-12 col-md-5">Parola noua</label>
                                        <input name="newPasswordVet" type="password" class="col-12 col-md-7" style="border:none; border-radius:2px;">
                                    </div>
                                    <div class="row form-group" style="margin-bottom:5px;">
                                        <label class="col-12 col-md-5">Adresa</label>
                                        <input name="addressVet" type="text" class="col-12 col-md-7" placeholder="Eroilor 51" value="{{ $admin->admin->address}}" style="border:none; border-radius:2px;">
                                    </div>
                                    <div class="row form-group" style="margin-bottom:5px;">
                                        <label class="col-12 col-md-5">Program</label>
                                        <input name="scheduleVet" type="text" placeholder="08:00 - 18:00" class="col-12 col-md-7" value="{{ $admin->admin->schedule}}" style="border:none; border-radius:2px;">
                                    </div>
                                    <div class="row form-group" style="margin-bottom:5px;">
                                        <label class="col-12 col-md-5">Telefon</label>
                                        <input name="phoneVet" type="text" placeholder="0755 672 212" class="col-12 col-md-7" value="{{ $admin->admin->phone}}" style="border:none; border-radius:2px;">
                                    </div>
                                    <div class="row form-group" style="margin-bottom:5px;">
                                        <label class="col-12 col-md-5">Telefon fix</label>
                                        <input name="phoneFVet" type="text" placeholder="+0264 574 266" class="col-12 col-md-7" value="{{ $admin->admin->phoneF }}" style="border:none; border-radius:2px;">
                                    </div>
                                    <div class="row form-group" style="margin-bottom:5px;">
                                        <label class="col-12 col-md-5">Nume firma</label>
                                        <input name="firmNameVet" type="text" placeholder="S.C. Example S.R.L" class="col-12 col-md-7" value="{{ $admin->admin->firm_name }}" style="border:none; border-radius:2px;">
                                    </div>
                                    <div class="row form-group justify-content-center align-items-center">
                                        <button type="submit" class="col-6" style="height:50px; background-color:#40BA93; color:white;border:none;">Salveaza </button>
                                    </div>

                                </form>
                            @endif


                        </div>
                            <script>
                            let tabs = $('.tabs');
                            $("#appointment-button").click(function(){
                                tabs.removeClass('d-flex');
                                tabs.addClass('d-none');
                                let appointments = $('#appointments-tab');
                                appointments.addClass('d-flex');
                                appointments.removeClass('d-none');
                            });
                            $("#emergency-button").click(function(){
                                tabs.removeClass('d-flex');
                                tabs.addClass('d-none');
                                let appointments = $('#emergency-tab');
                                appointments.addClass('d-flex');
                                appointments.removeClass('d-none');
                            });
                            $("#appointment-vet-button").click(function(){
                                tabs.removeClass('d-flex');
                                tabs.addClass('d-none');
                                let appointments = $('#appointments-vet-tab');
                                appointments.addClass('d-flex');
                                appointments.removeClass('d-none');
                            });
                            $("#animals-button").click(function(){
                                tabs.removeClass('d-flex');
                                tabs.addClass('d-none');
                                let animals = $('#animals-tab');
                                animals.addClass('d-flex');
                                animals.removeClass('d-none');
                            });
                            $("#settings-button").click(function(){
                                tabs.removeClass('d-flex');
                                tabs.addClass('d-none');
                                let settings = $('#settings-tab');
                                settings.addClass('d-flex');
                                settings.removeClass('d-none');
                            });
                            $("#settings-vet-button").click(function(){
                                tabs.removeClass('d-flex');
                                tabs.addClass('d-none');
                                let settings = $('#settings-vet-tab');
                                settings.addClass('d-flex');
                                settings.removeClass('d-none');
                            });
                            $("#services-button").click(function(){
                                tabs.removeClass('d-flex');
                                tabs.addClass('d-none');
                                let settings = $('#services-tab');
                                settings.addClass('d-flex');
                                settings.removeClass('d-none');
                            });
                        </script>
                    </div>
                </div>


                <style>
                    .center-aligned-items {
                        align-items: center;
                        align-content: center;
                        justify-content: center;
                        display: flex;
                    }
                </style>

                <div class="row log-out center-aligned p-0" style="margin:0;margin-top:10px">
                    <div class="col-10 col-sm-6 col-md-2 p-0 center-aligned" style="height:50px;">
                        <a href="{{ route('user_logout') }}" class="link-no-decoration center-aligned" id="logout" name="logout" style="padding:5px;width:100%;background-color:#0B0B0B; border:none;height:90%;color:white">
                            Log out
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $('.show_appointment_details').click(function(){
        let appointment = $(this).parent().parent().next();
        if(appointment.hasClass('d-none')){
            appointment.removeClass('d-none');
            appointment.addClass('d-flex');
        }
        else {
            appointment.removeClass('d-flex');
            appointment.addClass('d-none');
        }
    })
    $('.show_animal_details').click(function(){
        let appointment = $(this).parent().parent().next();
        if(appointment.hasClass('d-none')){
            appointment.removeClass('d-none');
            appointment.addClass('d-flex');
        }
        else {
            appointment.removeClass('d-flex');
            appointment.addClass('d-none');
        }
    });


</script>
</body>
</html>