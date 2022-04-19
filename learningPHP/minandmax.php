<?php


//min()
//Return minimum value and it also works for arrays.


$int = min(10,70,25,89,45);
echo $int;

echo "<br><br><hr>";

//max()

$int1 = max(10,50,80,90,25,14,23);
echo $int1;


echo "<br><br><hr>";

//Function with example with array

$array1 = [[10,15,78,90,54,100],[10,50,78,45,69,52]];

// echo min($array1);

// echo max($array1);

// echo "<pre>";
// print_r(max($array1));
// echo "</pre>";

echo "<pre>";
print_r(min($array1));
echo "</pre>";




?>