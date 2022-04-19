<?php

//rand()
//this function is used to display any random number every time you refresh the page
//it also have parameter in which you can set number between min to max.


//Exampe 1


$new = rand();
echo $new . "<br>";

//Now use it by putting parameter

$new1 = rand(10, 20);
echo $new1 . "<br>";


//mt_rand()
//this function is used because it work 4 time faster than rand()

$new2 = mt_rand();
echo $new2 . "<br>";

$new3 = mt_rand(100, 200);
echo $new3 . "<br>";


//lcg_value()
//this function is used to work as similar and it has no parameter.
$new4 = lcg_value();
echo $new4;















?>