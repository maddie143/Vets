<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function showAllServicesPage(){
        return view('search_services');
    }
    public function showAddAppointmentPage(){
        $vets = Admin::all();
        return view('appointment',[
            'vets' => $vets
        ]);
    }
}
