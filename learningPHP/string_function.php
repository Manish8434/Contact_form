<?php

//String Built -in properties.


// 1. Strlen() Function

$string = "Manish kumar is a good boyy";

echo strlen($string);

echo "<br>";


//2. str_word_count() function

$string1 = "This is my Learning PHP";

echo str_word_count($string1);

echo "<br>";

//2. strrev() function

$string3 = "manish kumar";

echo strrev($string3);

echo "<br>";

//4. strpos() function
$string3 = "My hobbies is to play Cricket";

echo strpos($string3, "Cricket");

echo "<br>";
echo strpos($string3, "play");
echo "<br>";
echo strpos($string3, "hobbies");

echo "<br>";

//3.  str_replace() function

$string4 = "Welcome to Devopsschool";

echo str_replace("Devopsschool", "scmgalaxy", $string4);
echo "<br>";
echo str_replace("string", "number", $string5);

echo "<br>";


//4. ucwords() Function

$string6 = "welcome to devopsschool";
$string7 = "please subscribe";

echo ucwords($string6);

echo "<br>";

echo ucwords($string7);

echo "<br>";


//5. strtoupper() function

$string9 = "devops is future, join devopsschool today";

echo strtoupper($string9);

echo "<br>";
echo strtoupper($string);

echo "<br>";

//6. strtolower() function

$string10 = "BOOTSTRAP IS USED TO MAKE RESPONSIVE WEBPAGE";

echo strtolower($string10);

echo "<br>";
echo strtolower($string7);

echo "<br>";

//7. str_repeat() Function

$string11 = "My name is manish kumar";

echo str_repeat($string11, 12);

//This string is printed for 12 times at once.

echo "<br>";

echo str_repeat($string9, 10);

echo "<br>";

//11. substr() function

$string12 = "Visit Devopsschool for quality course Contain for free";

echo substr($string12, 5, 13);

echo "<br>";

echo substr($string, 3, 10);

echo "<br>";


 
//12. str_split() Function

$string13 = "Hello World";

print_r(str_split($string13, 2));

//It return it in the form of array.
// $array = str_split($string13, 4,);
// echo "<pre>";
// print_r($array);
// echo "</pre>";


echo "<br>";


$hDoc = <<<manish
<b>This is my biography</b>
my name is manish kumar<br>
i am a boy and age of 27<br>
my name is new name
manish;

echo $hDoc;


echo "<br>";

// NOW Docouments in PHP,
//This is totally same as Here Doc but only we have to put token name under singlw quote quoma.


$nDoc = <<<'mirror'
This is totally my work
<b>i am excellent in this work</b>
agree to do and assemble their parts
mirror;

echo $nDoc;

echo "<br>";


//Print Statement.

$string20 = "This is my hello to all";

print "Hello " . " " . $string20;
?>