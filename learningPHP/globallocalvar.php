<?php

//Global Variable is cannot access inside the function, and local variable cannot be accessed from outside.

$x = 10;
$y = 20;
function addition(){

global $x, $y;
$total = $x + $y;
echo $total . "<br>";
}
addition();
echo $y . "<br>";
echo $x . "<br>";


//Local Variable

function substraction(){

    $x = 100;
    $y = 20;
    $total = $x - $y;
    echo $total;
    
}
substraction();







?>