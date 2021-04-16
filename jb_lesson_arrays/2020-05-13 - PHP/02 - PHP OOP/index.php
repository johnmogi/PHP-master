<?php

require_once './Cat.php';
require_once './WildCat.php';

echo "Counter: " . Cat::getCounter() . "<br>";

$myCat = new Cat("Mitsi", 4);
$myCat->show();
echo "<br>";

echo "The age is: " . $myCat->getAge() . "<br>";

$myWildCat = new WildCat("Kitsi", 5, "Black");
$myWildCat->show();

echo "File Name: " . Cat::$fileName . "<br>";

echo "Counter: " . Cat::getCounter() . "<br>";

echo "Num of Legs: " . Cat::numOfLegs . "<br>";