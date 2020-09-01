<?php

namespace App\Http\Controllers;

use App\Additions\FuelType;
use App\Service\FuelConsumption;
use Illuminate\Http\Request;

class CarController extends Controller
{


    // public function calc(){
    //     $fuelConsumption = new FuelConsumption('BMW');
    //     $fuelConsumption = resolve(FuelConsumption::class);
    //     dd($fuelConsumption->refuling(50));
    // }

    public function calc(FuelConsumption $fuelConsumption, FuelType $fuelType){
        $fuelType = $fuelType->premium();
        dd($fuelConsumption->refuling(50));

    }


}
