<?php

require_once "Car.php";
require_once "Bicycle.php";
require_once "Bus.php";
require_once "SkateBoard.php";
require_once "PedestrianWay.php";
require_once "MotorWay.php";
require_once "ResidentialWay.php";

$car = new Car("Blue", 4);
$bicycle = new Bicycle("red", 2);
$bus = new Bus("Yellow", 40);
$skateboard = new SkateBoard("grey", 0);

$pedestrianWay = new PedestrianWay(1, 10);

$residentialway = new ResidentialWay(2, 50);

$motorway = new MotorWay(4, 130);

$pedestrianWay->addVehicle($skateboard);
$motorway->addVehicle($car);
$residentialway->addVehicle($skateboard);

var_dump($pedestrianWay);
var_dump($residentialway);
var_dump($motorway);
