<?php

abstract class HighWay 
{
    protected array $currentVehicle = [];
    protected int $nbLane;
    protected int $maxSpeed;

    public function __construct()
    {
        $car = new Car("Blue", 4);
        $bus = new Bus("Yellow", 40);

        $this->setCurrentVehicle([
            $car, $bus
        ]);
    }



    /**
     * Get the value of currentVehicle
     */ 
    public function getCurrentVehicle()
    {
        return $this->currentVehicle;
    }

    /**
     * Set the value of currentVehicle
     *
     * @return  self
     */ 
    public function setCurrentVehicle(array $vehicle)
    {
        $this->currentVehicle = $vehicle;

    }

    /**
     * Get the value of nbLane
     */ 
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * Set the value of nbLane
     *
     * @return  self
     */ 
    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;

    }

    /**
     * Get the value of maxSpeed
     */ 
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * Set the value of maxSpeed
     *
     * @return  self
     */ 
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }

    abstract public function addVehicle(Vehicle $vehicle);
}
