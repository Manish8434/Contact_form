<?php

//Constructer function is a kind of function used in OOPs which is automatically called by it seld.
//In this function we have not to write modifier variable values again and again.

//Example 1


class manish{
    public $a, $b;

    function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;

    }
    function login(){
        echo $this->a * $this->b;
    }
}

$manish1 = new manish(10,10);
$manish1->login();


echo "<br><br>";


class personal{

    public $name, $age, $city;

    function __construct($n, $a, $c){
        $this->name = $n;
        $this->age = $a;
        $this->city = $c;
    }

    function deatil(){
        echo "Your details are : " . "Name :" . $this->name . " " . "Your age : " . $this->age . " " . "Your city : " . $this->city;
    }
}

$alldetail = new personal("manish", 56, "Bokaro");
$alldetail->deatil();













?>