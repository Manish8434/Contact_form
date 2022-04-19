<?php

//bin2hex function
//this function is used to convert binary format to hexa format.

//Example 1

$str1 = "Hello Planet Earth";

$newstr1 = bin2hex($str1);

echo $newstr1;

echo "<br><br><hr>";

//hex2bin function
//this function is used to covert hexa format to binary format.

$newstr2 = hex2bin($newstr1);
echo $newstr2;



?>