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
            <div class="col-12  m-0 p-0 content-container" style="background-color:#ecf2e9;flex-direction:column; height:100%;display:flex;">
                <div class="empty-space" style="height:7em;"></div>
                <div class="row logged-in m-0" style="height:fit-content">
                    <div class="col-4 m-0 p-0" style="">

                        @if(\Auth::user()->profile_type == 1)
                            @include('partials.dashboard.client_menu')
                        @else
                            @include('partials.dashboard.vet_menu')
                        @endif

                    </div>
                    <div class="col-8 m-0 p-0" style="height:fit-content">
                        <div id="appointments-tab" class="d-none tabs row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5 style="margin:0;"> Programari </h5>
                            </div>
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <a href="{{ route('add_appointment') }}" style="background-color: transparent; border:none; outline:none; color:#D96C6C">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>

                            <!-- Appointment -->
                            <div class="col-10" style="margin:2px 0;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-5">
                                        <span>02.05.1996</span>
                                    </div>
                                    <div class="col-5">
                                        <h6 style="margin: 0;">Name Service</h6>
                                    </div>
                                    <div class="col-2">
                                        <button class="show_appointment_details">Show</button>
                                    </div>
                                </div>
                                <div class="row m-0 d-none appointment_details" style="border:1px solid #40BA93;padding:10px 0; ">

                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Cabinet:</span>
                                        <span style="font-size:17px;">ProVet</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Numar telefon cabinet:</span>
                                        <span style="font-size:17px;">0752124</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Animal:</span>
                                        <span style="font-size:17px;">Kara</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Serviciu:</span>
                                        <span style="font-size:17px;">Tuns</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Data si ora:</span>
                                        <span style="font-size:17px;">02.07.1996 14:00</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Medic</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Confirmata</span>
                                    </div>
                                    <div class="col-10" style="height:45px;">
                                        <div class="row m-0 h-100 ">
                                            <button class="col-5 h-100">
                                                Modifica
                                            </button>
                                            <button class="col-5 h-100">
                                                Anuleaza
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Appointment -->
                            <div class="col-10" style="margin:2px 0;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-5">
                                        <span>02.05.1996</span>
                                    </div>
                                    <div class="col-5">
                                        <h6 style="margin: 0;">Name Service</h6>
                                    </div>
                                    <div class="col-2">
                                        <button class="show_appointment_details">Show</button>
                                    </div>
                                </div>
                                <div class="row m-0 d-none appointment_details" style="border:1px solid #40BA93;padding:10px 0; ">

                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Cabinet:</span>
                                        <span style="font-size:17px;">ProVet</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Numar telefon cabinet:</span>
                                        <span style="font-size:17px;">0752124</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Animal:</span>
                                        <span style="font-size:17px;">Kara</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Serviciu:</span>
                                        <span style="font-size:17px;">Tuns</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Data si ora:</span>
                                        <span style="font-size:17px;">02.07.1996 14:00</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Medic</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Confirmata</span>
                                    </div>
                                    <div class="col-10" style="height:45px;">
                                        <div class="row m-0 h-100 ">
                                            <button class="col-5 h-100">
                                                Modifica
                                            </button>
                                            <button class="col-5 h-100">
                                                Anuleaza
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="appointments-vet-tab" class="d-none tabs row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5 style="margin:0;"> Programari </h5>
                            </div>
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <a href="{{ route('add_appointment') }}" style="background-color: transparent; border:none; outline:none; color:#D96C6C">
                                    <i class="fas fa-plus"></i>
                                </a>
                            </div>

                            <div class="col-10" style="margin:2px 0;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-5">
                                        <span>02.05.1996</span>
                                    </div>
                                    <div class="col-5">
                                        <h6 style="margin: 0;">Name Service</h6>
                                    </div>
                                    <div class="col-2">
                                        <button class="show_appointment_details">Show</button>
                                    </div>
                                </div>
                                <div class="row m-0 d-none appointment_details" style="border:1px solid #40BA93;padding:10px 0; ">

                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Client:</span>
                                        <span style="font-size:17px;">Madadada</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Numar telefon client:</span>
                                        <span style="font-size:17px;">0752124</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Animal:</span>
                                        <span style="font-size:17px;">Kara</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Serviciu:</span>
                                        <span style="font-size:17px;">Tuns</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Data si ora:</span>
                                        <span style="font-size:17px;">02.07.1996 14:00</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Medic</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Confirmata</span>
                                    </div>
                                    <div class="col-10" style="height:45px;">
                                        <div class="row m-0 h-100 ">
                                            <button class="col-5 h-100">
                                                Confirma
                                            </button>
                                            <button class="col-5 h-100">
                                                Anuleaza
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div id="services-tab" class="tabs row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-10 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5> Servicii </h5>
                            </div>
                            <!-- Serviciu -->
                            <div class="col-10" style="margin:2px 0;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-6">
                                        <h6 style="margin: 0">Nume serviciu</h6>
                                    </div>
                                    <div class="col-2">Pret</div>
                                    <button class="col-2" style="border:none; background-color:transparent; color:white;">Modifica</button>
                                    <button class="col-2" style="border:none; background-color:transparent; color:white;">Sterge</button>

                                </div>
                            </div>
                            <div class="col-10" style="margin:2px 0;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-6">
                                        <span>Nume serviciu</span>
                                    </div>
                                    <div class="col-2">Pret</div>
                                    <button class="col-2" style="border:none; background-color:transparent; color:white;">Modifica</button>
                                    <button class="col-2" style="border:none; background-color:transparent; color:white;">Sterge</button>

                                </div>
                            </div>
                            <div class="col-10" style="margin:2px 0;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-6">
                                        <span>Nume serviciu</span>
                                    </div>
                                    <div class="col-2">Pret</div>
                                    <button class="col-2" style="border:none; background-color:transparent; color:white;">Modifica</button>
                                    <button class="col-2" style="border:none; background-color:transparent; color:white;">Sterge</button>

                                </div>
                            </div>


                        </div>

                        <div id="animals-tab" class="tabs d-none row m-0 p-0 ">
                            <div class="col-12 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5> Animalele mele </h5>
                            </div>
                            <!-- Animal -->
                            <div class="col-6" style="margin:2px 0;padding:0 2px;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-7 justify-content-center align-items-center d-flex">
                                        <span>Kara</span>
                                    </div>
                                    <div class="col-5">
                                        <button class="show_animal_details">Show</button>
                                    </div>
                                </div>
                                <div class="row m-0 d-none animals_details" style="border:4px solid #40BA93;padding-top:10px; ">

                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Nume:</span>
                                        <span style="font-size:17px;">ProVet</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Data nasterii:</span>
                                        <span style="font-size:17px;">0752124</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Sex:</span>
                                        <span style="font-size:17px;">Kara</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Specie:</span>
                                        <span style="font-size:17px;">Tuns</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Rasa:</span>
                                        <span style="font-size:17px;">02.07.1996 14:00</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Culoare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Semne particulare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Cod identificare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <button class="col-6" style="border:none;border-right:1px solid #348d6d;height:50px;background-color:#40BA93;  color:white">
                                        Modifica
                                    </button>
                                    <button class="col-6" style="height:50px;background-color:#40BA93; border:none; color:white">
                                        Sterge
                                    </button>

                                </div>
                            </div>
                            <!-- Animal -->
                            <div class="col-6" style="margin:2px 0;padding:0 2px;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-7 justify-content-center align-items-center d-flex">
                                        <span>Kara</span>
                                    </div>
                                    <div class="col-5">
                                        <button class="show_animal_details">Show</button>
                                    </div>
                                </div>
                                <div class="row m-0 d-none animals_details" style="border:4px solid #40BA93;padding-top:10px; ">

                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Nume:</span>
                                        <span style="font-size:17px;">ProVet</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Data nasterii:</span>
                                        <span style="font-size:17px;">0752124</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Sex:</span>
                                        <span style="font-size:17px;">Kara</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Specie:</span>
                                        <span style="font-size:17px;">Tuns</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Rasa:</span>
                                        <span style="font-size:17px;">02.07.1996 14:00</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Culoare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Semne particulare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Cod identificare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <button class="col-6" style="border:none;border-right:1px solid #348d6d;height:50px;background-color:#40BA93;  color:white">
                                        Modifica
                                    </button>
                                    <button class="col-6" style="height:50px;background-color:#40BA93; border:none; color:white">
                                        Sterge
                                    </button>

                                </div>
                            </div>
                            <!-- Animal -->
                            <div class="col-6" style="margin:2px 0;padding:0 2px;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-7 justify-content-center align-items-center d-flex">
                                        <span>Kara</span>
                                    </div>
                                    <div class="col-5">
                                        <button class="show_animal_details">Show</button>
                                    </div>
                                </div>
                                <div class="row m-0 d-none animals_details" style="border:4px solid #40BA93;padding-top:10px; ">

                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Nume:</span>
                                        <span style="font-size:17px;">ProVet</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Data nasterii:</span>
                                        <span style="font-size:17px;">0752124</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Sex:</span>
                                        <span style="font-size:17px;">Kara</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Specie:</span>
                                        <span style="font-size:17px;">Tuns</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Rasa:</span>
                                        <span style="font-size:17px;">02.07.1996 14:00</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Culoare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Semne particulare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Cod identificare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <button class="col-6" style="border:none;border-right:1px solid #348d6d;height:50px;background-color:#40BA93;  color:white">
                                        Modifica
                                    </button>
                                    <button class="col-6" style="height:50px;background-color:#40BA93; border:none; color:white">
                                        Sterge
                                    </button>

                                </div>
                            </div>
                            <!-- Animal -->
                            <div class="col-6" style="margin:2px 0;padding:0 2px;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-7 justify-content-center align-items-center d-flex">
                                        <span>Kara</span>
                                    </div>
                                    <div class="col-5">
                                        <button class="show_animal_details">Show</button>
                                    </div>
                                </div>
                                <div class="row m-0 d-none animals_details" style="border:4px solid #40BA93;padding-top:10px; ">

                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Nume:</span>
                                        <span style="font-size:17px;">ProVet</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Data nasterii:</span>
                                        <span style="font-size:17px;">0752124</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Sex:</span>
                                        <span style="font-size:17px;">Kara</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Specie:</span>
                                        <span style="font-size:17px;">Tuns</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Rasa:</span>
                                        <span style="font-size:17px;">02.07.1996 14:00</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Culoare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Semne particulare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Cod identificare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <button class="col-6" style="border:none;border-right:1px solid #348d6d;height:50px;background-color:#40BA93;  color:white">
                                        Modifica
                                    </button>
                                    <button class="col-6" style="height:50px;background-color:#40BA93; border:none; color:white">
                                        Sterge
                                    </button>

                                </div>
                            </div>
                            <!-- Animal -->
                            <div class="col-6" style="margin:2px 0;padding:0 2px;height:fit-content;">
                                <div class="row m-0 justify-content-center align-items-center" style="height:100px;background-color:#40BA93">
                                    <div class="col-7 justify-content-center align-items-center d-flex">
                                        <span>Kara</span>
                                    </div>
                                    <div class="col-5">
                                        <button class="show_animal_details">Show</button>
                                    </div>
                                </div>
                                <div class="row m-0 d-none animals_details" style="border:4px solid #40BA93;padding-top:10px; ">

                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Nume:</span>
                                        <span style="font-size:17px;">ProVet</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Data nasterii:</span>
                                        <span style="font-size:17px;">0752124</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Sex:</span>
                                        <span style="font-size:17px;">Kara</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Specie:</span>
                                        <span style="font-size:17px;">Tuns</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Rasa:</span>
                                        <span style="font-size:17px;">02.07.1996 14:00</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Culoare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Semne particulare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <div class="col-12">
                                        <span style="font-size:15px; font-weight: bold;">Cod identificare</span>
                                        <span style="font-size:17px;">Pop</span>
                                    </div>
                                    <button class="col-6" style="border:none;border-right:1px solid #348d6d;height:50px;background-color:#40BA93;  color:white">
                                        Modifica
                                    </button>
                                    <button class="col-6" style="height:50px;background-color:#40BA93; border:none; color:white">
                                        Sterge
                                    </button>

                                </div>
                            </div>

                        </div>
                        <div id="settings-tab" class="tabs d-none row m-0 p-0 justify-content-center align-items-center">
                            <div class="col-12 d-flex justify-content-center align-items-center" style="margin:2px 0;">
                                <h5> Setari cont </h5>
                            </div>
                            <form class="col-10">
                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Nume</label>
                                    <input type="text" class="col-7">
                                </div>
                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Adresa email</label>
                                    <input type="email" class="col-7">
                                </div>
                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Oras</label>
                                    <input type="email" class="col-7">
                                </div>
                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Judet</label>
                                    <input type="email" class="col-7">
                                </div>
                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Parola noua</label>
                                    <input type="password" class="col-7">
                                </div>
                                <div class="row form-group" style="margin-bottom:5px;">
                                    <label class="col-5">Telefon</label>
                                    <input type="text" class="col-7">
                                </div>
                                <div class="row form-group justify-content-center align-items-center">
                                    <button class="col-6" style="height:50px; background-color:#40BA93; color:white;border:none;">Salveaza </button>
                                </div>

                            </form>
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

                <div class="row m-0 p-0" style="height:300px;"></div>
                <div class="row log-out center-aligned" style="margin:0;margin-top:30px;">
                    <div class="col-10 col-sm-6 col-md-2 p-0 center-aligned" style="height:50px;margin:10px;">
                        <a href="#" class="link-no-decoration center-aligned" id="logout" name="logout" style="width:100%;background-color:#0B0B0B; border:none;height:90%;border-radius:5px;color:white">
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
    })
</script>
</body>
</html>