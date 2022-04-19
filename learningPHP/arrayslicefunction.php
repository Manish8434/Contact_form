<?php

//Array_slice()
//Example with Index Array

$array1 = ["mohan", "samrat", "bittu", "nilesh","santosh", "amit"];

$newArray1 = array_slice($array1, 2, 4);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

echo "<br><br><hr>";

//we have a fourth parameter of reserve parameter, default value is False, if we set it to true..it will return the orignal index number of array.

//example with reserve parameter

$array2 = ["mohan", "samrat", "bittu", "nilesh","santosh", "amit"];
$newArray2 = array_slice($array2, 2, 4, true);


echo "<pre>";
print_r($newArray2);
echo "</pre>";

echo "<br><br><hr>";

//Example with associative array
//array_slice()

$array3 = ['a' => "mohan", 'b' =>  "samrat", 'c' => "bittu", 'd' => "nilesh",'e' => "santosh", 'f' => "amit"];

$newArray3 = array_slice($array3, 2, 4);

echo "<pre>";
print_r($newArray3);
echo "</pre>";


echo "<br><br><hr>";

//Example 4

$array4 = ['0' => "mohan", '1' =>  "samrat", '2' => "bittu", '3' => "nilesh",'4' => "santosh", '5' => "amit"];

$newArray4 = array_slice($array4, 3, 2, true);

echo "<pre>";
print_r($newArray4);
echo "</pre>";

?>