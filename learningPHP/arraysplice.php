<?php

//array_splice()
//Example 1

$array1 = ["manish", "rakesh", "tittu", "rittu", "anmol", "pratap"];

array_splice($array1, 4);

echo "<pre>";
print_r($array1);
echo "</pre>";


echo "<br><br><hr>";

//Example 2
//Array with negative index value

$array2 = ["manish", "rakesh", "tittu", "rittu", "anmol", "pratap"];

array_splice($array2, -2);

echo "<pre>";
print_r($array1);
echo "</pre>";

echo "<br><br><hr>";

//Example 3
//Repalce array element with new array element in the existing array.
//syntax :- array_splice($array1, start, end, array2);

$array3 = ["manish", "rakesh", "tittu", "rittu", "anmol", "pratap"];
$array4 = ["mj", "cull", "notly"];

// array_splice($array3,count($array3), 0, $array4);
array_splice($array3,2, 4, $array4);

echo "<pre>";
print_r($array3);
echo "</pre>";


?>