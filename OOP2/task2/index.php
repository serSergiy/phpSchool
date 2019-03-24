<?php

require __DIR__.'\vendor\autoload.php';

$cars = [
    new \App\PassengerCar(
        'Deo',
        'Lanos',
        2120,
        'AA4034VK',
        'light'
    ),
    new \App\PassengerCar(
        'Lamborghini',
        'Diablo',
        2010,
        'AA4034BK',
        'full'
    ),
    new \App\Car(
        'ZAZ',
        'Tracktor',
        1900,
        '0000'
    ),
    new \App\Truck(
        'MAN',
        'Large',
        2015,
        'LV3309BK',
        40
    ),
];

$cars[1]->setVINCode('BK4019BM');

$carCatalog = new \App\CarCatalog();

foreach ($cars as $car){
    $carCatalog->push($car);
}

$carCatalog->displayCars();


