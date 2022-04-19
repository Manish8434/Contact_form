<?php

//Check_date()
//This function is used to check any given date is correct or not(valid or not)

//Example 1

// echo checkdate(2,15,2024) . "<br>"; //This format date is valid and return 1 as true value.
// echo checkdate(2,35,2024) . "<br>"; //This format is invalid and it return 0 as false value.


//date_diff()
//it will return number of days between 2 dates.


$date1 = date_create("2013-03-15");
$date2 = date_create("2013-12-12");

$diff = date_diff($date1, $date2);  
echo $diff -> days .  "days";

// echo "<pre>";
// print_r($diff);
// echo "</pre>";








?>