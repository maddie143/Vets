<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Animal;
use App\Appointment;
use App\Client;
use App\Race;
use App\Service;
use App\Specie;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\MessageBag;

class UserController extends Controller
{
    //
    public function showLoginPage(){
        if(\Auth::check()){

            return redirect(route('show_dashbord'));
        }
        return view('login');
    }
    public function showRegisterPage(){
        if(\Auth::check()){
            return redirect(route('show_dashbord'));
        }
        return view('register');
    }

    public function login(Request $request){
        $rules = array(
            'username' => 'required|',
            'password' => 'required|min:3'
        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()){
            return Redirect::to(route("show_login"))
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
        else {
            $userdata = array(
                'username'  => Input::get('username'),
                'password'  => Input::get('password')
            );
            if(Auth::attempt($userdata)){
                return redirect(route("show_homepage"));
            }
            else {
                return redirect(route("show_login"))->withInput()->withErrors(new MessageBag([
                    'logging' => [
                        'Datele introduse nu sunt corecte'
                    ]
                ]));
            }
        }

    }
    public function saveChanges(){
        $actual_user = \Auth::user();

        $actual_user->name = Input::get('name');
        $actual_user->email = Input::get('email');
        if(Input::get('password') != "")
            $actual_user->password = Hash::make(Input::get('password'));

        $actual_user->client->phone = Input::get('phone');
        $actual_user->client->save();
        $actual_user->save();
        return redirect(route('show_dashbord'));

    }
    public function saveChangesVet(){

        $actual_user = \Auth::user();
        if(Input::get('password') != "")
            $actual_user->password = Hash::make(Input::get('newPasswordVet'));

        $actual_user->admin->address = (!is_null(Input::get("addressVet"))) ? Input::get("addressVet") : "";
        $actual_user->admin->schedule = (!is_null(Input::get("scheduleVet"))) ? Input::get("scheduleVet") : "";
        $actual_user->admin->phone = (!is_null(Input::get("phoneVet"))) ? Input::get("phoneVet") : "";
        $actual_user->admin->phoneF = (!is_null(Input::get("phoneFVet"))) ? Input::get("phoneFVet") : "";
        $actual_user->admin->firm_name = (!is_null(Input::get("firmNameVet"))) ? Input::get("firmNameVet") : "";

        $actual_user->admin->save();
        $actual_user->save();
        return redirect(route('show_dashbord'));



    }
    public function showDashbord(){

        if(\Auth::user()->profile_type) {
            $user_appointments = \Auth::user()->client->appointments;
            $animals = \Auth::user()->client->animals;
            return view('dashbord',[
                'user_appointments' => $user_appointments,
                'animals'           => $animals,
                'actualUser'        => \Auth::user()
            ]);
        }
        $appointments = \Auth::user()->admin->appointments;
        $services = \Auth::user()->admin->services;
        return view('dashbord',[
            'appointments' => $appointments,
            'services'     => $services,
            'admin'        => \Auth::user()
        ]);
    }
    public function register(Request $request){
        $rules = array(
            'user_type'    => 'required|',
            'name'         => 'required|',
            'email'        => 'required|',
            'county'       => 'required|',
            'city'         => 'required|',
            'username'     => 'required|',
            'password'     => 'required|min:3'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()){
            return Redirect::to(route("show_register"))
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        }
        else {
            $userdata = array(
                'profile_type' => Input::get('user_type'),
                'name'         => Input::get('name'),
                'email'        => Input::get('email'),
                'county'       => Input::get('county'),
                'city'         => Input::get('city'),
                'username'     => Input::get('username'),
                'password'     => Input::get('password'),
            );
            $user = new User($userdata);

            if($user->profile_type == 1){
                $client = new Client();
                $client->phone = '';
                $client->gender = '';

            }
            else {
                $admin = new Admin();
                $admin->address = "";
                $admin->schedule = "";
                $admin->phone = "";
                $admin->phoneF = "";
                $admin->firm_name = "";
                $admin->emergency = false;
                $admin->emergency_schedule = "";
            }
            $user->password = Hash::make($request->get('password'));
            $message = "";
            $messageSucces = "";
            try {
                $user->save();
                if($user->profile_type == 1){
                    $client->user_id = $user->id;
                    $client->save();
                }
                else {
                    $admin->user_id = $user->id;
                    $admin->save();
                }
                $messageSucces= "Contul a fost creat cu succes! Va rugam sa va logati";
                return redirect(route('show_login'));
            }
            catch (QueryException $exception)
            {
                $message = "Mai exista un cont cu acest e-mail sau cu acest username!";
            }
            return redirect(route("show_register"))->withInput()->withErrors(new MessageBag([
                'registeringWithError' => [
                    $message
                ],
                'registeringSuccess'    => [
                    $messageSucces
                ]
            ]));
        }
    }

    public function confirmAppointment($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            abort(404);
        }

        $appointment->confirmation = true;
        $appointment->save();
        return back();
    }

    public function logout(){
        \Auth::logout();
        return redirect(route('show_homepage'));
    }
    public function processAppointment(Request $request)
    {
        $rules = array(
//            'pet' => 'required|',
            'vet' => 'required|'
//            'service' => 'required|',
//            'data' => 'required|',
//            'hour' => 'required|'
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return Redirect::to(route("add_appointment"))
                ->withErrors($validator);
        } else {
            $appointmentdata = array(
                'admin_id' => Input::get('vet'),
                'animal_id' => Input::get('pet'),
                'service_id' => Input::get('service'),
                'date' => Input::get('data'),
                'hour' => Input::get('hour'),
                'client_id' => \Auth::user()->client->id,
                'medic_id' => 1
            );
            $appointment = new Appointment($appointmentdata);
            $message = "";
            $messageSucces = "";
            try {

                $appointment->save();
                $messageSucces = "Programarea a fost adaugata cu succes!";
            } catch (QueryException $exception) {
                $message = "Eroare query";
            }
            return redirect(route("add_appointment"))->withInput()->withErrors(new MessageBag([
                'registeringWithError' => [
                    $message
                ],
                'registeringSuccess' => [
                    $messageSucces
                ]
            ]));
        }
    }

    public function cancelAppointment($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            abort(404);
        }

        $appointment->delete();
        return back();
    }

    public function modifyService($id){
        $service = Service::find($id);
        if (!$service) {
            abort(404);
        }

        $service->name = Input::get('modifyServiceName');
        $service->admin()->updateExistingPivot($service, ['price' => Input::get('modifyServicePrice')], false);

        $service->save();
        return back();
    }
    public function deleteService($id){
        $service = Service::find($id);

        if (!$service) {
            abort(404);
        }

        $service->delete();
        return back();
    }
    public function saveEmergency($id){
        $admin = Admin::find($id);
        if (!$admin) {
            abort(404);
        }
        $admin->emergency = Input::get('emergency');
        $admin->emergency_schedule = (!is_null(Input::get("emergency_program"))) ? Input::get("emergency_program") : "";

        $admin->save();
        return redirect(route('show_dashbord'));
    }


    public function addAnimalPage(){
        $species = Specie::all();
        $races = Race::all();
        return view('animals',[
            'species' => $species,
            'races'   => $races
        ]);
    }
    public function deleteAnimal($id){
        $animal = Animal::find($id);

        $animal->delete();
        return redirect(route('show_dashbord'));
    }
    public function addAnimalProcess(){
        $animal = new \App\Animal();
        $animal->client_id = \Auth::user()->client->id;
        $animal->name = (!is_null(Input::get("name"))) ? Input::get("name") : "";
        $animal->date_of_birth = (!is_null(Input::get("data"))) ? Input::get("data") : "";
        $animal->gender = (!is_null(Input::get("gender"))) ? Input::get("gender") : "";


        $animal->specie_id = Input::get('specie');


        $animal->race_id = Input::get("race");
        $animal->color = (!is_null(Input::get("color"))) ? Input::get("color") : "";
        $animal->particular_signs = (!is_null(Input::get("particular_signs"))) ? Input::get("particular_signs") : "";
        $animal->identification_code = (!is_null(Input::get("identification_code"))) ? Input::get("identification_code") : "";

        try{
            $animal->save();
            return redirect(route('show_dashbord'));
        }
        catch(Exception $e){
            echo "eroare";
        }
        return redirect(route('add_animal'));
    }


}
