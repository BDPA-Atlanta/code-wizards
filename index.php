<?php

require('./Automobile.php');
require('./Car.php');

$veyron = new Car();
$veyron->make = "Buggatti";
$veyron->model = "Veyron";
$veyron->engine = "V16";
$veyron->isASuperCar = true;
$veyron->rating = 8.9;

// $range = new Automobile();
// $range->name = "Range Sport";
// $range->rating = 8.6;

// $p1 = new Automobile();
// $p1->name = "P1";
// $p1->engine = "Twin Turbo 3.8 ltr / Combined Electric";
// $p1->isASuperCar = true;
// $p1->rating = 8.8;


var_dump($veyron);

// var_dump($range);

// var_dump($p1);