<?php

//Comparision Operator in PHP
//Comparisison Operator return 2 values either TRUE or FALSE.
//If value is TRUE, Result will be (1)
//If value is FALSE, Result will be blanked.

//1. Equal to (==)

$num1 = 10;
$num2 = 10;

echo " <br> Result = ";
echo $num1 == $num2;

//2. Equal value as well as Data Types(===)

$num3 = 20;
$num4 = 20;

echo " <br> Result = ";
echo $num3 === $num4;

//3. Not Equal To (!=)

$num5 = 10;
$num6 = 20;

echo " <br> Result = ";
echo $num5 != $num6;

//4. Not Equal value nor Data Types(!==)

$num7 = 20;
$num8 = "40";

echo " <br> Result = ";
echo $num7 !== $num8;

//5. Greater than (>)

$num9 = 20;
$num10 = 17;

echo " <br> Result = ";
echo $num9 > $num10;

//6. Smaller than (<)

$num11 = 34;
$num12 = 67;

echo " <br> Result = ";
echo $num11 < $num12;

//7. greater than and equal to (>=)
//Here we have 2 condition either number is greater than or equal to, in both case the resutwill be TRUE. (1)
//-- Greater than 
$num13 = 65;
$num14 = 20;

echo " <br> Result = ";
echo $num13 >= $num14;

//--equal Condition

$num15 = 56;
$num16 = 56;

echo " <br> Result = ";
echo $num15 >= $num16;

//8. Smaller than or Equal to
//Here we have 2 condition either number is Smaller than or equal to, in both case the resutwill be TRUE. (1)

//--Smaller than
$num17 = 27;
$num18 = 34;

echo " <br> Result = ";
echo $num17 <= $num18;

//--Equal condition

$num19 = 89;
$num20 = 89;

echo " <br> Result = ";
echo $num19 <= $num20;

//Spaceship Operator (<=>)
//It is new to PHP, it return possibly 3 values if value is less than return (-1), value is equal to(0), value is greater than (1);

//Condition 1

$num21 = 34;
$num22 = 23;

echo " <br> Result = ";
echo $num21 <=> $num22;


//Condition 2

$num23 = 60;
$num24 = 60;

echo " <br> Result = ";
echo $num23 <=> $num24;

//Condition 3

$num25 = 10;
$num26 = 24;

echo "<br> Result = ";
echo $num25 <=> $num26;


//This is all from Comparision Operator





?>