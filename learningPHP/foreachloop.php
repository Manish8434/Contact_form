<?php

//For Each Loop with index array.
//syntax of for each loop with index array
//foreach($array_name as $value){
//     echo $value};

$array1 = [10,12,15,17,19,34,10,56,78,30, "manishkumar"];

echo "<ul>";
foreach($array1 as $value){

    echo "<li> $value </li>";
}
echo "</ul>";

echo "<br><br><hr>";
echo "<br><br>";


//For Each loop with Associative array
//syntax of for each loop with associative error
//foreach($array_name as $key_name => $value){

//
//echo $key_name . ' = ' . $value;
//}

$array2 = [

         "Data1" => 19,
         "Maku" => "manishkumar",
         "vitamin" => "C",
         "Mineral" => 45,
         "name" => "Hydrogen"

];

foreach($array2 as $manish => $value){

     echo $manish . " = " . $value . "<br>";


}

echo "<br><br><hr>";



?>