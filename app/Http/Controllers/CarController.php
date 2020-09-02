<?php

namespace App\Http\Controllers;

use App\Additions\FuelType;
use App\Service\FuelConsumption;
use App\Service\FuelControl;
use Illuminate\Http\Request;

class CarController extends Controller
{


    // public function calc(){
    //     $fuelConsumption = new FuelConsumption('BMW');
    //     $fuelConsumption = resolve(FuelConsumption::class);
    //     dd($fuelConsumption->refuling(50));
    // }

    public function calc(FuelControl $fuelControl, FuelType $fuelType){
        $fuelType = $fuelType->premium();
        dd($fuelControl->refueling(50));

    }


}
