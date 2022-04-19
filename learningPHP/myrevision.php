<?php


//Data types


//string

$str1 = "manish kumar";
echo $str1 . "<br>";
var_dump($str1);

echo "<br><br>";

//Number(Integers);

$str2 = 123456;
echo $str2 . "<br>";
var_dump($str2);

echo "<br><br><hr>";

//bolean

$str3 = true;
$str4 = false;

echo $str3 . "<br>";
echo $str4 > "<br>";
var_dump($str3) . "<br>";
var_dump($str4);


//float

$str5 = 2333.78;
var_dump($str5);

echo "<br><br><hr>";

$array = ["manish", "ravi", "vikash"];

echo "<pre>";
print_r($array);
echo "</pre>";

var_dump($array);

echo "<br><br><hr>";

//Constant variabels
define("manish", "manishkumar");
echo manish;

echo "<br><br><hr>";

define("str", "my name is manish kumar",true);

// echo sTr;
// echo STR;

echo "<br><br><hr>";
$num21 = 14;
$num22 = 14;

echo " <br> Result = ";
echo $num21 <=> $num22;




?>