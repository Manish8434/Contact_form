<?php


//how to define Variables in PHP
//We use $ before the variable name to assign a Variable in PHP

$x = "My name is Manish Kumar";
echo $x;

$y = 120976;
echo "<br><h1>" . $y . "</h1>";

// (.) Dot is used to concatenate varibes value or add strings.

$name = "My name is ";
$name1 = "Manish Kumar";

echo $name . $name1;


$num1 = 120;
$num2 = 100;

echo ("<br>" . $num1 . $num2);


//variables name should be case senstive in PHP

$name = "Manish kumar";
$NAME = "Manish kumar";

// in this above case both variables have same name "name", but they are totally different variables for PHP.

//how to declare variables in PHP (Good Practise).

$name;
$_name;
$name12;
$firstName;
 //this are the best way to declare variables Name in PHP.


?>