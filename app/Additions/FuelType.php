<?php

namespace App\Additions;

use App\Service\FuelConsumption;

class FuelType{

    private $fuelConsumption;

    public function __construct(FuelConsumption $fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
    }

    public function premium(){

        $this->fuelConsumption->premiumGasoline(50);


    }


}
