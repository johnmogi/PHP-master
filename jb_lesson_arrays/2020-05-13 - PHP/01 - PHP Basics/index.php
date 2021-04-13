<?php

// Output: 
echo "Hello<br>";
echo 1234 . "<br>";
echo "This is another line...<br>";

// Variables: 
$age = 30;
$str = "Cool";
echo "Age: " . $age . ", Text: " . $str . "<br>";
echo "Age: $age, Text: $str<br>";

// Conditions:
if($age > 20) {
    echo "Age is larger than 20<br>";
}
elseif($age > 30) {
    echo "Age is larger than 30<br>";
}
else {
    echo "Age is smaller or equal to 20<br>";
}

$grade = rand(0, 100);
if($grade >= 60) {
    echo "Grade: $grade --> Pass :-)<br>";
}
else {
    echo "Grade: $grade --> Fail :-(<br>";
}

echo "Grade: $grade --> " . ($grade >= 60 ? "Pass :-)" : "Fail :-(") ."<br>";

// Loops: 
$i = 1;
while($i <= 10) {
    echo $i . ", ";
    $i++;
}
echo "<br>";

$i = 1;
do {
    echo $i . ", ";
    $i++;
}while($i <= 10);
echo "<br>";

for($i = 1; $i <= 10; $i++) {
    echo $i . ", ";    
}
echo "<br>";


$first = rand(1, 300);
$last = rand(1, 300);
if($first > $last) {
    $temp = $first;
    $first = $last;
    $last = $temp;
}
for($i = $first; $i <= $last; $i++) {
   echo $i . ", " ;
}
echo "<br>";

// Arrays: 
$arr1 = array(10, 20, 30, "Hi");
for($i = 0; $i < count($arr1); $i++) {
    echo $arr1[$i] . ", ";
}
echo "<br>";

$arr2 = [10, 20, 30, "Hi"];
for($i = 0; $i < count($arr2); $i++) {
    echo $arr2[$i] . ", ";
}
echo "<br>";

for($i = 0; $i < 10; $i++) {
    $arr3[] = $i * $i; // push.
}
for($i = 0; $i < count($arr3); $i++) {
    echo $arr3[$i] . ", ";
}
echo "<br>";

for($i = 0; $i < 100; $i++) {
    $randomNumbers[] = rand(1, 1000);
}
for($i = 0; $i < count($randomNumbers); $i++) {
    echo $randomNumbers[$i] . ", ";
}
$sum = 0;
for($i = 0; $i < count($randomNumbers); $i++) {
    $sum += $randomNumbers[$i];
}
echo "Average: " . ($sum / count($randomNumbers)) . "<br>";


// Associative Array: 
$colorItems = ["sky" => "blue", "sun" => "yellow", "grass" => "green"];
echo "sky is " . $colorItems["sky"] . "<br>";
echo "sun is " . $colorItems["sun"] . "<br>";
echo "grass is " . $colorItems["grass"] . "<br>";

// foreach: 
foreach($arr1 as $value) {
    echo $value . ", ";
}
echo "<br>";

foreach($colorItems as $key => $value) {
    echo "Key: " . $key . ", Value: " . $value . ", ";
}
echo "<br>";

// Functions: 
function sayHi() {
    echo "Hi<br>";
}
sayHi();

function getAverage($a = 1, $b = 2, $c = 3) {
    $avg = ($a + $b + $c) / 3;
    return $avg;
}
$avg = getAverage(10, 200, 3000);
echo "Average: " . $avg . "<br>";

$avg = getAverage();
echo "Average: " . $avg . "<br>";


// include './math2.php';
// include_once './math.php';
// require "./math.php";
require_once './math.php';

$result = add(10, 20);
echo "Result: " . $result . "<br>";

require_once './arrayOperations.php';

$sum = getSum([12,23,34,45,56,67]);
$avg = getAvg([12,23,34,45,56,67]);
echo "Sum: $sum, Avg: $avg<br>";


// Literal Object: 
$cat = new stdClass();
$cat->name = "Mitsi";
$cat->age = 4;
$cat->color = "White";

echo "Name: " . $cat->name . ", Age: " . $cat->age . ", Color: " . $cat->color . "<br>";
echo "Name: $cat->name, Age: $cat->age, Color: $cat->color<br>";

