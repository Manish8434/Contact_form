<?php

$name = array("manishkumar", "amit", "bittu", "samrat", "anil");

echo $name[0] . "<br>";
echo $name[1] . "<br>";
echo $name[2] . "<br>";
echo $name[3] . "<br>";
echo $name[4] . "<br>";
echo "<pre>";
print_r($name);

echo "</pre>";

echo "<br>";

//print_r Function

echo "<pre>";
print_r($name);
echo "</pre>";

echo "<br>";

echo "<pre>";
echo var_dump($name);
echo "</pre>";




echo "<br>";
//For loop used to print all value of array

$name1 = ["mango", "vikash","rakesh", 12, 17, 90, "aakash"];

for($i = 0;$i < 7; $i++){

    echo $name1[$i] . "<br>";

}








?>