<?php

//Ist Method to declare Variable Function

function myFunction($x, $y){

    $z = $x + $y;
    echo "Sum of this number is :" . $z . "<br>";
}
$newFunction = "myFunction";
$newFunction(20, 30);


//2nd Method to declare Variable Function.


$addition = function($n, $m){

    $sum = $n + $m;
    echo "The sum of this number is :" . $sum;
    
};

$addition(70, 90);





?>