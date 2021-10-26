<?php

require_once 'Vehicle.php';

class Bicycle extends Vehicle
{
    public function changeWheels()
    {
        return " Change wheel of a bike ";
    }
}
