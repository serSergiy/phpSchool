<?php

namespace App;

class CarCatalog
{
    private $cars = [];

    public function push(Car $car)
    {
        array_push($this->cars, $car);
    }

    public function pop() : Car
    {
        return array_pop($this->cars);
    }

    public function displayCars()
    {
        foreach ($this->cars as $car){
            $car->printInf();
            echo PHP_EOL;
        }
    }
}