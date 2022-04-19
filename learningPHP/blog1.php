<?php

//Array array_merge_recursive()


//Example 1
//Multi Dimensional Array

$myArray4 = ['a' => "digital", 'b' => "Technical", 'c' => "Bullshop", 'd' => "Levies"];
$myArray5 = ['a' => "london", 'b' => ['color' => ["green", "red", "yellow"]], "aakash"];

$narray = array_merge_recursive($myArray4, $myArray5);

echo "<pre>";
print_r($narray);
echo "</pre>";


echo "<b><br><hr>";

//Example 2
//array_merge() with Multi Dimensional array

$myArray4 = ['a' => "digital", 'b' => "Technical", 'c' => "Bullshop", 'd' => "Levies"];
$myArray5 = ['a' => "london", 'b' => ['color' => ["green", "red", "yellow"]], "aakash"];

$xarray = array_merge($myArray4, $myArray5);
echo "<pre>";
print_r($xarray);
echo "</pre>";

?>