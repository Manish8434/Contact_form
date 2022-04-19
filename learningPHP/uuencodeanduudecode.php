<?php

//Convert_uudecode -- this function is used to decode any string in encrypte form, that is save in data base and is not readable.
//This function is used because in this function we can code and decode both available.


//convert_uudecode()

//Example 1

$str1 = "My name is Manish Kumar";

echo $str1 . "<br>";

//using this function
echo "<br><br><hr>";

$newstr1 = convert_uuencode($str1);
echo "This is uuencode : " . "<b>" . $newstr1 . "<br>";

//Now convert value is put in any variable.
echo "<br><br><hr>";

$newstr2 = convert_uudecode($newstr1);
echo "This is uudecode : " . "<b>" . $newstr2 . "<b>";


echo "<br><br><hr>";

$str11 = "manish@1234";
$newstr10 = convert_uuencode($str11);
echo $newstr10;

echo "<br><br><hr>";
//now decode it

$mynewstr = convert_uudecode($newstr10);
echo $mynewstr;






?>