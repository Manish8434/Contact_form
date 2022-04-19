<?php

// function percentage($maths, $physics, $chemestry){

//     $total = $maths + $physics + $chemestry;
//     $percentage = $total / 3;

//     return $percentage;

// }
// $result = percentage(50,50, 50);
// echo $result;


$marks1 = 89;
$marks2 = 90;
$marks3 = 70;

// $totalMarks = $marks1 + $marks2 + $marks3;
// $tPercentage = $totalMarks / 3;


function myPercentage($marks1, $marks2, $marks3){
    $marks1 = 70;
    $marks2 = 80;
    $marks3 = 90;
    
    $totalMarks = $marks1 + $marks2 + $marks3;
    $tPercentage = $totalMarks / 3;
    
    return $tPercentage;
}

$fResult = myPercentage($marks1, $marks2, $marks3);
echo $fResult;



?>