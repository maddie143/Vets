<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
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

    public function showDashbord(){
        $appointments = \Auth::user()->admin->appointments;
        $services = \Auth::user()->admin->services;
        return view('dashbord',[
            'appointments' => $appointments,
            'services'     => $services
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
            echo "lalala";
            $user = new User($userdata);
            $user->password = Hash::make($request->get('password'));
            $message = "";
            $messageSucces = "";
            try {
                $user->save();
                $messageSucces= "Contul a fost creat cu succes! Va rugam sa va logati";
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

    public function cancelAppointment($id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            abort(404);
        }

        $appointment->delete();
        return back();
    }
}
