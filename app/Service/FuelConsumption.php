<?php

namespace App\Service;


class FuelConsumption{

    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function refuling($liter){

        return[
            'distance' => $liter * 10,
            'model' => $this->model,
        ];

    }

}
