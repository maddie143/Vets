<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;

class VetController extends Controller
{
    public function showVet(){
        return view('cabinet');
    }
    public function showAllVetPage(Request $request, Admin $model){
        $search = $request->get('searchName');
        $query = $model->newQuery();

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



    //
}
