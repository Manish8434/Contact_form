<?php

//This is a type of function which is used to inheritate the function of other class.
//It can used its own function and also its derived function.

//To implement this function we used extends.

class employee{

    public $name, $age, $salary;


    function __construct($n, $a, $s){

        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }

    function structure(){
        echo "Employe salary structure" . "<br>";
        echo $this->name . "<br>";
        echo $this->age . "<br>";
        echo $this->salary . "<br>";
    }
    
}

class manager extends employee{

    public $ta = 1000;
    public $phone = 300;
    public $totalsalary;

    function staructure1(){
        $this->totalsalary = $this->ta + $this->phone + $this->salary;
        echo $this->name;
        echo $this->age;
        echo $this->totalsalary;
    }
    
    
}

$clone = new manager("rakesh", 34, 2000);
$clone->staructure1();







?>