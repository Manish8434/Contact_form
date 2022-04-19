<?php

$age = 22;
$voterId = "yes";

if($age > 21){
    if($voterId == "yes"){
        echo "You are Eligible to Vote";
    }elseif($voterId == "no"){
        echo "Go apply for VoterId Card";
    }else{
        echo "Invalid input";
    }
}else{
    echo "Your age is minnor, Grow first";
}


?>