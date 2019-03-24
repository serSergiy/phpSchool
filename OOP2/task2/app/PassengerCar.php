<?php

namespace App;

class PassengerCar extends Car
{
    private $equipment;

    /**
     * PassengerCar constructor.
     * @param $brand
     * @param $model
     * @param $productionYear
     * @param $VINCode
     * @param $equipment
     */
    public function __construct($brand, $model, $productionYear, $VINCode, $equipment)
    {
        parent::__construct($brand, $model, $productionYear, $VINCode);
        $this->equipment = $equipment;
    }

    public function printInf()
    {
        parent::printInf();
        echo "Equipment: $this->equipment |";
    }

    /**
     * @return mixed
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * @param mixed $equipment
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;
    }
}