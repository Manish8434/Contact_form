<?php

//Data Types in PHP


//1. STRING

$name = "Manish kumar";

echo ($name . "<br>");
echo var_dump($name . "<br>");


//2. INTEGERS

$num = 12345;

echo ($num . "<br>");
echo var_dump($num . "<br>");

//3. FLOATS

$num1 = 1;  
$num2 = 54.472; 
//Sum it  

echo ($num1 + $num2 . "<br>");

//4. BOOLEANS

$condition1 = true;


echo ($condition1 . "<br>");
echo var_dump($condition1 . "<br>");

//5. Null

$noValue = null;

echo ($noValue . "<br>");
echo var_dump($noValue . "<br>");

//6. Array

$array = ["manish", "amit", "rakesh"];

echo ($array[2] . "<br>");
echo var_dump($array);

//7. Objects

class bike {  
    function model() {  
         $model_name = "Royal Enfield";  
         echo "<br>Bike Model: " .$model_name;  
       }  
}  
$obj = new bike();  
$obj -> model();  

//8. Reourcces

// Open a file for reading
// $handle = fopen("note.txt", "r");
// var_dump($handle);
// echo "<br>";
 
// Connect to MySQL database server with default setting
// $link = mysqli_connect("localhost", "root", "");
// var_dump($link);s


?>