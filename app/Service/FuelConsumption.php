<?php

namespace App\Service;


class FuelConsumption implements FuelControl{

    private $model;
    private $extra;

    public function __construct($model)
    {
        $this->model = $model;
        $this->extra = 0;
    }

    public function refueling($liter){

        return[
            'distance' => $liter * 10 + $this->extra,
            'model' => $this->model,
            'extra' => $this->extra,
        ];
    }


    public function premiumGasoline($extra){
        $this->extra = $extra;
    }

}
