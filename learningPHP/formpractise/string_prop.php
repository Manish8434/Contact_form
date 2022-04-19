<?php

//strlen


$string1 = "My name is manish kumar";

echo strlen($string1) . "<br>";
echo str_word_count($string1) . "<br>"; //It gives you number of words in string.
echo str_replace("manish", "rakesh",$string1) . "<br>"; //It will replace given string with other string.
echo ucwords($string1) . "<br>"; //It return string with every starting letter is in Capital.
echo strtoupper($string1) . "<br>";
echo strtolower($string1) . "<br>";
echo strpos($string1, "kumar"). "<br>"; //It will return the position of given string.
echo strrev($string1) . "<br>"; //It will return the reverse of this string.
echo substr($string1,5,12) . "<br>"; // it will return string start from 5 and total of 12 postion.
echo str_repeat($string1, 10) . "<br>";
$str1 = str_split($string1,4);
echo "<pre>";
print_r($str1);
echo "</pre>";
?>