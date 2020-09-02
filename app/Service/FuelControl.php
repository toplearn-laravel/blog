<?php

namespace App\Service;

interface FuelControl{
    public function refueling($liter);
    public function premiumGasoline($extra);
}
