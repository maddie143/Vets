<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ServiceController extends Controller
{
    public function showAllServicesPage(){
        return view('search_services');
    }
    public function showAddAppointmentPage(){
        $vets = Admin::all();

        $services = [];
        foreach ($vets as $vet) {
            $services[$vet->id] = $vet->services;
        }


        $animals = \Auth::user()->client->animals;
        return view('appointment',[
            'vets' => $vets,
            'animals' => $animals,
            'services' => json_encode($services)
        ]);
    }
    public function showService(){
        $services = Service::all();
        return view('services',[
            'services' => $services
        ]);
    }
    public function addService(){
        $service_chosen = Input::get('service');
        $service_id = null;
        if(!is_null($service_chosen) && "" !== $service_chosen){
            $service = Service::whereRaw('LOWER(name)="' . $service_chosen .'"')->get()->first();
            if(!is_null($service)){
                $service_id = $service->id;
            }
            else {
                $service = new Service();
                $service->name = $service_chosen;
                $service->save();
                $service_id = $service->id;
            }

        }
        else {
            $service_id = Input::get('service_combo');
        }

        if(!is_null($service_id)){
            $service_exists = \Auth::user()->admin->services()->where('services.id',$service_id)->get()->first();
            if(!$service_exists){
                \Auth::user()->admin->services()->attach($service_id, [
                    'price' => Input::get("price")
                ]);
            }
        }

        return redirect(route("show_dashbord"));

    }
}
