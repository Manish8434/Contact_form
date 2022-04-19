<?php

//Date() All properties

//All properties related to day.
//d -- day will show with 0 (01)
//j -- day will show without zero (1)
//S -- it will add "th", "rd"
echo "Today day is " . date("d") . "<br>";
echo "Today day is " . date("j") . "<br>";
echo "Today day is " . date("jS") . "<br>";
echo "Today day is " . date("m") . "<br>";

echo "<br><br><hr>";

//All properties related to Months
//F -- Full month name (January)
//m -- month will be in numeric form with zero (01)
//M -- Month will be show first three letter (jan)
//n -- month numeric value shown without zero

echo "Present month is " . date("F") . "<br>";
echo "Present month is " . date("m") . "<br>";
echo "Present month is " . date("M") . "<br>";
echo "Present month is " . date("n") . "<br>";


echo "<br><br><hr>";

//All properties related to Year
//Y -- This will shown year with complete form (2020)
// y -- this will shown only last two digit of year (21)

echo "Present year is " . date("Y") . "<br>";
echo "Present year is " . date("y") . "<br>";

echo "<br><br><hr>";

//All properties related to week
//D -- This will shown day of week in 3 letter
// I -- This will shown the which weak of the year is this.
// N -- This will shown the day count between 1 to 7
// w -- This will shown the day count between 0 to 6



echo "Present week is " . date("D") . "<br>";
echo "Present week is " . date("I") . "<br>";
echo "Present week is " . date("N") . "<br>";
echo "Present week is " . date("w") . "<br>";


echo "<br><br><hr>";

//Additional properties that is use with date format.
//z -- this will tell you which day is of 365 days.
//w -- this will tell you which weak of year is.
//t -- this will show the total days count of present month.
// L -- this will shows you the current year is leap year or not? return value is in true and false(0, 1)


echo "Today day count is " . date("z"). "<br>";
echo "Today week count is " . date("W"). "<br>";
echo "Total day count is " . date("t"). "<br>";
echo "present moth is leap yaer? " . date("L"). "<br>";

echo "<br><br><hr>";

//complete format of date input is

echo "Todays date is " . date("jS M Y");

?>