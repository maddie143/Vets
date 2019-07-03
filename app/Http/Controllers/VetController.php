<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Http\Commands\FilterByCity;
use App\Http\Commands\FilterByCounty;
use App\Http\Commands\FilterByEmergency;
use App\Http\Commands\FilterByService;
use Illuminate\Http\Request;

class VetController extends Controller
{
    public function showVet($id){
        $vet = Admin::find($id);

        if (!$vet) {
            abort(404);
        }

        return view('cabinet', [
            'vet' => $vet
        ]);
    }
    public function showAllVetPage(Request $request, Admin $model){
        $search = $request->get('searchName');

        $filters = [
            "county" => $request->get("county"),
            "city" => $request->get("city"),
            "service" => $request->get("service"),
            "emergency" => $request->get("emergency"),
        ];

        $query = $model->newQuery();

        //Filter through the Command pattern
        $query = dispatch_now(new FilterByCounty($query, $filters));
        $query = dispatch_now(new FilterByCity($query, $filters));
        $query = dispatch_now(new FilterByService($query, $filters));
        $query = dispatch_now(new FilterByEmergency($query, $filters));

        if(strlen($search) > 0) {

            $query = $query->whereHas('user', function($q) use ($search) {
                return $q->where('name', 'like', '%'.$search.'%');
            });
        }

        return view('search_cabinet',[
            'vets'   => $query->get(),
            'search' => $search,
        ]);
    }

    public function showEmergency(){
        $vets = Admin::where('emergency',true)->get();
        return view('emergency',[
            'vets' => $vets
        ]);
    }



    //
}
