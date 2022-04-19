<?php

class manish{

    public $a, $b, $c;


    function sum(){
       echo $this->a + $this->b;
    
    }
}

$man = new manish();

$man->a = 50;
$man->b = 100;

$man->sum();














?>