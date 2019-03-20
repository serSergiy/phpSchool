<?php

require_once 'Car.php';
require_once 'PassengerCar.php';
require_once 'Truck.php';
require_once 'CarCatalog.php';

$cars = [
    new PassengerCar(
        'Deo',
        'Lanos',
        2120,
        'AA4034VK',
        'light'
    ),
    new PassengerCar(
        'Lamborghini',
        'Diablo',
        2010,
        'AA4034BK',
        'full'
    ),
    new Car(
        'ZAZ',
        'Tracktor',
        1900,
        '0000'
    ),
    new Truck(
        'MAN',
        'Large',
        2015,
        'LV3309BK',
        40
    ),
];

$cars[1]->setVINCode('BK4019BM');
$carCatalog = new CarCatalog();
foreach ($cars as $car){
  $carCatalog->push($car);
}

$carCatalog->displayCars();




