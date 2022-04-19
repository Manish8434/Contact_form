<?php

//Array array_merge()

//Example 1

$myArray1 = ["digital", "Technical", "Bullshop", "Levies"];
$myArray2 = ["london", "brazil", "aakash"];

$newArray = array_merge($myArray1, $myArray2);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br><br><hr>";

//Example 2
//array_merge_recursive()

$myArray3 = ['a' => "digital", 'b' => "Technical", 'c' => "Bullshop", 'd' => "Levies"];
$myArray4 = ['a' => "london", 'b' => "brazil", "aakash"];

$newArray1 = array_merge_recursive($myArray3, $myArray4);

echo "<pre>";
print_r($newArray1);
echo "</pre>";

echo "<br><br><hr>";

//Example 3
//array_merge_recursive()

$myArray4 = ['a' => "digital", 'b' => "Technical", 'c' => "Bullshop", 'd' => "Levies"];
$myArray5 = ['a' => "london", 'b' => ['color' => ["green", "red", "yellow"]], "aakash"];

$newArray3 = array_merge_recursive($myArray4, $myArray5);

echo "<pre>";
print_r($newArray3);
echo "</pre>";



?>