<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use App\Models\Trucker;

use Illuminate\Http\Request;

class TruckTruckerController extends Controller
{
    public function asociar(){

    $truckers = Trucker::all();
    $trucks = Truck::all();


    return view ('truck_trucker.asociar',compact('trucks','truckers'));

    }

    public function store(Request $request){

        return $request;

    }
}