<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{
    public function changeWheels()
    {
        return " Change wheel of a car ";
    }
}
