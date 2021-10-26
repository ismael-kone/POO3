<?php

require_once "HighWay.php";
require_once "Bicycle.php";
require_once "SkateBoard.php";

final class PedestrianWay extends HighWay
{
    public function addVehicle(Vehicle $vehicle)
    {
        $this->currentVehicle[] = $vehicle;
    }
}
