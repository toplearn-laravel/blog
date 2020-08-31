<?php

namespace App\Http\Controllers;

use App\Service\FuelConsumption;
use Illuminate\Http\Request;

class CarController extends Controller
{


    // public function calc(){
    //     $fuelConsumption = new FuelConsumption('BMW');
    //     $fuelConsumption = resolve(FuelConsumption::class);
    //     dd($fuelConsumption->refuling(50));
    // }

    public function calc(FuelConsumption $fuelConsumption){

        dd($fuelConsumption->refuling(50));

    }


}
