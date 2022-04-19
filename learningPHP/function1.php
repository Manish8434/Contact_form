<?php

//Function is easy and effective way to execute code time to time.



function myFunction(){  //function declared here with name myfunction()

for($i =0;$i < 10;$i++){

    echo $i; //this is the code to be execute with function
}
echo "<br>";
}
myFunction();  //here we call that function 
myFunction();
myFunction();


function hello($x, $y){

    return $x + $y;

}
$result = hello(20, 30);
echo $result . "<br>";


function divide($x, $y){
    return $x / $y;
}
$result1 = divide(30, 10);
echo $result1 . "<br>";


function addition($x, $y){

    echo $x + $y;
}
addition(50, 40);

?>