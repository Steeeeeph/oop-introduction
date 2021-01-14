<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


require "exercise_1_classes.php/Beverage.php";
require "exercise_2_extend/Beer.php";

// TODO EX 1
$beverages[]= $cola = new Beverage("brown", 2);
$beverages[]= $tea = new Beverage("clear", 1.5, "warm");

// echo $cola->getInfo();
// echo "<br>";
// echo $tea->getInfo();

// echo "<pre>";
// var_dump($beverages);
// echo "</pre>";



// TODO EX 2

$duvel = new Beer("blonde", 3.5, "Duvel", 8.5, );

// var_dump($duvel);
echo $duvel->getAlcoholpercentage();
echo "<br>";
print_r($duvel->getAlcoholpercentage());
echo "<br>";
print_r($duvel->color);
echo "<br>";
print_r($duvel->getInfo());
echo "<br>";
echo $cola->alcoholpercentage;

// TODO EX 3

