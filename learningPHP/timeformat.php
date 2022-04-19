<?php

//Time format function and properties

//Hour Format properties.
// H -- It will shown the hour in numeric form with zero.
// h -- it will dhown the hour in 24 hr format numeric form without zero.
//G -- iT will shown the hour format with zero.
//g -- it will shown the hour format without zero in 24 hr format.


echo "Hour is " . date("H") . "<br>";
echo "Hour is " . date("h") . "<br>";
echo "Hour is " . date("g") . "<br>";
echo "Hour is " . date("G") . "<br>";


echo "<br><br><hr>";

//Minutes Properties
// i -- This will shown minutes in numeric form

echo "minutes is " . date("i");

echo "<br><br><hr>";


//Seconds Properties
//s -- it shown the seconds

echo "seconds are " . date("s");


echo "<br><br><hr>";

//marediem properties
//a -- return am and pm in small letter
//A -- return AM and PM in capital letter.

echo "am/ pm is " . date("a") . "<br>";
echo "AM/ PM is " . date("A") . "<br>";


echo "<br><br><hr>";

//Full format of time is.



echo "Current Time is " . date("H:i:sa e") . "<br>";

// e - this will show the time zone name. 

date_default_timezone_set("Asia/Kolkata");
echo "Current Time is " . date("H:i:sa e") . "<br>";




?>
<html>
<body>
    
<div class = "input_field">
    <label for="">
    <input type="checkbox">
    <span  style="color:red"></span>
    </label>
    <p>Agree</p>
</div>

</body>
</html>