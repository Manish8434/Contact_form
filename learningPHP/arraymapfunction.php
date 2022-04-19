<?php

//array_map function is basically a function of array that is used to run a particular function for every single value of array

//Example 1
//Index Array

function myFunction($x){
    return $x * $x;
}

$array1 = [2,5,6,8,10];

$newarray1 = array_map('myFunction', $array1);

echo "<pre>";
print_r($newarray1);
echo "</pre>";

echo "<br><br><hr>";


//Example 2
//Multiple array with multiple parameter.

function newFunction($y, $z){
    return "$y = $z";
}

$array2 = [10,40,69,39,12];
$array3 = ["manish", "amit", "aakash", "rohit","rounak"];

$newarray2 = array_map('newFunction', $array2, $array3);

echo "<pre>";
print_r($newarray2);
echo "</pre>";

echo "<br><br><hr>";

//Example 3
//Associative array

function newFunction1($k){
    return $k;
}

$array5 = [["one" => "apple"],["two" => "banana"],["three" => "pinapple"]];
$newarray3 = array_map('newFunction1', $array5);

echo "<pre>";
print_r($newarray3);
echo "</pre>";

echo "<br><br><hr>";








?>