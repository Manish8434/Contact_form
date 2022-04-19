<?php

//Function call by value;


function value($name){

    $name .= " and Handsome too.";
    //call by value, no change on parameter.

}
$newName = "You are very Smart";
value($newName);
echo $newName . "<br>";

//Function call by Reference.

function value1(&$name1){

    $name1 .= " boy and Girl";

}

$nameOne = "You are a beautiful";
value1($nameOne);
echo $nameOne;




?>