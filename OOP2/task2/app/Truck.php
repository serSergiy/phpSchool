<?php

namespace App;

class Truck extends Car
{
    private $carryingCapacity;

    /**
     * Truck constructor.
     * @param $brand
     * @param $model
     * @param $productionYear
     * @param $VINCode
     * @param $carryingCapacity
     */
    public function __construct($brand, $model, $productionYear, $VINCode, $carryingCapacity)
    {
        parent::__construct($brand, $model, $productionYear, $VINCode);
        $this->carryingCapacity = $carryingCapacity;
    }

    public function printInf()
    {
        parent::printInf();
        echo "Carrying capacity: $this->carryingCapacity |";
    }

    /**
     * @return mixed
     */
    public function getCarryingCapacity()
    {
        return $this->carryingCapacity;
    }

    /**
     * @param mixed $carryingCapacity
     */
    public function setCarryingCapacity($carryingCapacity)
    {
        $this->carryingCapacity = $carryingCapacity;
    }
}