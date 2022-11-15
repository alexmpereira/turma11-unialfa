<?php

use App\Domain\Activities\HistoryDay;
use App\Domain\Entity\Car;

require_once __DIR__ . '/../vendor/autoload.php';

$car = new Car
(
    "R34",
    "V-Spec",
    2002
);

$client = new HistoryDay
(
    "Bruno",
    20,
    "10203028120",
    $carBruno
);

var_dump($client->startCar());
var_dump($client->changeCarOil());
var_dump($client->reviewCar());
var_dump($client->offCar());


