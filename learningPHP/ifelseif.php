<?php

$marks = 90;
$grade;

if($marks >= 80 && $marks <= 100){
    $grade = "Your Grade is A";
}elseif($marks >= 60 && $marks < 79){
    $grade = "Your Grade is B";
}elseif($marks >= 40 && $marks < 59){
    $grade = "Your Grade is C";
}elseif($marks < 40){
    $grade = "Your are Fail";
}else{
    $grade = "Invalid marks Input";


}
echo $grade;

?>