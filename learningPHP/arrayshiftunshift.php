<?php


//array_shift()
$array1 = ["green", "blue", "red", "voilet", "orange"];

$array2 = array_shift($array1);

echo $array2 . "<br>";

echo "<pre>";
print_r($array1);
echo "</pre>";

echo "<br><br><hr>";


//array_unshift()

$array2 = ["tomato", "ladyfinger", "brinjal", "potato"];
echo count($array2);

array_unshift($array2, "stwberry", 15, 10, 100, 300);

echo "<pre>";
print_r($array2);
echo count($array2);
echo "</pre>";
?>