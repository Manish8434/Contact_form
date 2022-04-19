<?php

//array_reduce function
//same function which have a function as parameter and that function is run for every singlevalue of array.
//it has three parameter (array_name, function, initial_value(optional))

//In function we pass two parameter, first parameter have no value and in second prameter eery value will store, and if we gave any initial value then this value is stored in first parameter.

//Example 1
//Index array with string value

function myFunction($x, $y){
    return $x . "-" . $y;
}
$array1 = ["bomabay", "delhi", "kolkata", "bangalore", "cuttuck"];

//we want to add every string value in one value.

$newarray1 = array_reduce($array1, 'myFunction') ."<br>";
//now lets set a initial value, initial value would be any thing string, integer, float number.

$newarray2 = array_reduce($array1, 'myFunction', "city_name");

echo $newarray1 . "<br><br>";
echo $newarray2;

echo "<br><br><hr>";

//Example 2
//Index array with integer value
//in this array of integer we can do any thing, like add, subtraction, multiplication,divide and more.

function newFunction($k, $l){
    return $k + $l;
}
function newFunction1($k, $l){
    return $k += $l;
}
$array3 = [2,10,40,45,67];

$newarray3 = array_reduce($array3, 'newFunction');
//let put a initial value.

$newarray5 = array_reduce($array3, 'newFunction1', 20);

echo $newarray3 . "<br>";
echo $newarray5;

//when we set initial value by itself, this value is store in first parameter, otherwise first parameter is zero value.







?>