<?php

//Recursive Function


function myFunction($num){

    if($num <= 10){

        echo $num ."<br>";
        myFunction($num + 1);
    }
}
myFunction(0);

//Recursive function is work same as loops, it call it self until the condition remains true.


//Method to count factorial number of $n.

function factorial($n){

    if($n == 0){
        return 1;
    }else{
        return ($n * factorial($n-1));
    }

}
$final = factorial(4);
echo $final;

echo "<br>";






?>