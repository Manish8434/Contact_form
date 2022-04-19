<?php


//This function is used to secure password in hexa format and binary format in data base.
//md5 -- > message-digest-algrithm.
//have 2 parameter, string name and true and false, if true-convert in binary number, if false convert in hexa form, false is the default value.

//md5 --- message digest algorithm
//Example 1

$str1 = "manish kumar";

echo md5($str1) . "<br>";

//Lets check default values
//TRUE
echo md5($str1, true) . "<br>";
echo md5($str1, false);

echo "<br><br><hr>";

//sha1 -- this is the similar function as md5.

//sha1 -- secure hash algorithm

//example 2

$str2 = "cotocus@1";
echo sha1($str2) . "<br>";

//lets check the parameter of sha1.

echo sha1($str2, true) . "<br><hr>";
echo sha1($str2, false) . "<br><br><hr>";


//This type of function is mainly use in password secuirty. if else condition.

if(sha1($str2) == "0e29ae94096dda3d183c6b5737653161c4749331"){
    echo "password Matched.";
}else{
    echo "password not matched";
}






?>