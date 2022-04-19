<?php

//How to Declare Constant Variable in PHP.

//Syntax for Declaration

// define("variable_name", Value, insensitive(true/false))

//if we declare insensitive TRUE, it means you can call this variable with capital letter too.
//if we declare insensitive FALSE, it means you cannot call this variable with capital letter too, you have to call same as name declare.
//once cnstant variable declare it is global variables.

//Example

define("num1",100,true);
//define("num1",200); --> Error Constant num1 already defined in C:\xampp\htdocs\learningPHP\constant.php on line 16
// define("num1",100,true);

//Here we mark true and call it by NUM1, and code execute.
echo (NUM1);
echo (num1);

//Use arthematic operrator

define("num2",100);
$num3 = 50;

echo "<br>" . (num2 + $num3);



define("new1", 100);
echo "<br>" . new1;

echo "<br>";


define("num",200);

echo num;

?>