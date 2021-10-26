<?php
require_once "HighWay.php";

final class MotorWay extends HighWay
{

    public function addVehicle(Vehicle $vehicle)
    {
        if (!$vehicle instanceof Bicycle || !$vehicle instanceof SkateBoard)
        {
            $this->currentVehicle[] = $vehicle;
        }
    }

}
