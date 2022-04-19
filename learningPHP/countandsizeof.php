<?php

$array1 = ["banana","apple","pineapple","grapes"];

// echo count($array1);

echo sizeof($array1). "<br>";

$array2 = [
          "fruit" => ["apple","mango","guava","grapes"],
          "veggi"  => ["tomato", "brinjal","potato","ladyfinger"]

];

// echo sizeof($array2, 1);
// echo count($array2, 1);
echo count($array2['fruit']). "<br>";
echo count($array2['veggi']);  

echo "<br><br><hr>";

//Example with for loop 

$array3 = ["banana","apple","pineapple","grapes", "brinjal","peas"];

$arraylen = count($array3);

for($i = 0; $i < $arraylen; $i++){

     echo $array3[$i] . " ";

}




?>