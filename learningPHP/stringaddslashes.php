<?php

//String AddSlashes

$str = "My Name is 'Manish Kumar', I am also a 'Graduate'";

$newstr = addslashes($str);

echo $newstr . "<br>";

//String Stripslashes
echo stripslashes($newstr) . "<br>";

//we can also add slashes as we want

//string addcslashes

$str1 = "i am working at cotocus pvt ltd";

$str2 = addcslashes($str1, "cotocus") . "<br>";
$str2 = addcslashes($str1, "c") . "<br>"; //add slashes after any word, we want.
$str2 = addcslashes($str1, "a..z") . "<br>"; //add slashes befor alphabet between a..z
echo $str2 . "<br>";


//string stripcslashes

$newStr3 = stripcslashes($str2); // This is work not properly, so we use simple "stripslashes".

$newStr4 = stripslashes($newStr3);
echo $newStr3 . "<br>";

echo $newStr4;




?>