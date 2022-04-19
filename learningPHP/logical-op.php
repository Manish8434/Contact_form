<?php

// $day = 110;
// $day1 = 30;


// switch(falses){
//     case $day > $day1:
//         echo "This is valid";
//         break;
    
//     Case $day < $day1:
//          echo "This is not valid";
//          break;

//     default:
//          echo "This is what happening";


// }



$name2 = 15;

$result = ($name2 > 20) ? "This is true statement" : "This is not true";

echo $result;

echo "<br>";


// $age = 18;

// $vote = ($age > 18)? "You can vote":"ypu cannot vote";

// echo $vote;


echo "<br><br><hr>";

$marks = 79;

$grade="";

if($marks >= 80 && $marks <= 100){
    $grade = "Your grade is A";
}elseif($marks >= 60 && $marks < 80){
    $grade = "Your grade is B";
}elseif($marks >= 40 && $marks < 60){
    $grade = "Your grade is C";
}elseif($marks >= 33 && $marks < 40){
    $grade = "Your grade is D";
}elseif($marks < 33){
    $grade = "You are fail";
}else{
    $grade = "Invalid marks";
}

echo $grade;

echo "<br><br><hr>";


$day = 1;

$dayname="";

switch($day){
    case 1:
        $dayname = "Today is monday";
        break;
    case 2:
        $dayname = "Today is tuesday";
        break;
     case 3:
        $dayname = "Today is wednesday";
        break;
     case 4:
        $dayname = "Today is Thursday";
        break;
     case 5:
        $dayname = "Today is friday";
        break;
     case 6:
        $dayname = "Today is saturday";
        break;
     case 7:
        $dayname = "Today is sunday";
        break;
     default:
     $dayname = "Invalid daycount";                      
}

echo "input : " . $dayname;



echo "<br><br><hr>";


$i = 0;

while($i < 10){
    echo "Today is test<br>" ;
    $i++;
}


echo "<br><br><hr>";

$n = 12345;
$i = 0;
$c = 0;
$sum = 0;

while($n != 0){
    $c = $n % 10;
    $sum = $sum + $c;

    $n = (int)($n / 10);

}
echo $sum;

echo "<br><br><hr>";

$i = 0;


do{
    echo "You are beautiful<br>";
    $i++;
}
while($i > 10);

echo "<br><br><hr>";

$num = 123456;
$rev = 0;
$c = 0;

for($i = 0;$n != 0;$i++){
    $c = $n % 10;
    $rev = ($rev* 10) + $c;

    $n = (float)($n / 10);
   
}
echo $rev;

echo "<br><br><hr>";

for($i = 0;$i < 10;$i++){
    
    if($i == 4)
    break;
    echo $i;
}

echo "<br><br><hr>";


function myFunction(){
    echo $z = 10 + 20;
}
myFunction();

echo "<br><br><hr>";


function addition(){
    $x = 100;
    $y = 20;
    $z = $x + $y;
    return $z;
}

$result = addition();
echo $result;

echo "<br><br><hr>";


function manish($m, $n){
return $m * $n;
}

$result1 = manish(20,20);
echo $result1;

echo "<br><br><hr>";

function kumar($z,$k){
    echo $z + $k;
}
kumar(100,100);


echo "<br><br><hr>";


function newFunction($num){
    if($num < 10){
        echo $num . "<br>";
        newFunction($num + 1);
    }
}
newFunction(0);


echo "<br><br><hr>";

$array = ["manish","ravi","vikash","jhoon"];

foreach($array as $value){
    echo $value;
}

echo "<br><br><hr>";

$array1 = [
          [1,"manish","manager","digital marketing",10000],
          [2,"lokesh","ass manager","sales",15000],
          [3,"amrit","junior manager","field sales",23000],
          [4,"nimaro","location","digital",30000],
          [5,"ashok","business","owner",45000]

];
echo "<table border = '2' cellpadding = '5px' cellspacing = '0'>";

echo "<tr>
      <th>ID</th>
      <th>Name</th>
      <th>Position</th>
      <th>Department</th>
      <th>Salary</th>
      </tr>";

for($i = 0;$i< 5;$i++){
    echo "<tr>";
    for($j = 0;$j < 5;$j++){

        echo "<td>" . $array1[$i][$j] . "</td> ";
    }
    echo "</tr>";
}

echo "</table>";

echo "<br><br><hr>";

$array2 = ["manish","ravi","mantosh","sashi","manoj"];


echo count($array2);

echo sizeof($array2);

echo "<br><br><hr>";

$array2 = ["manish","ravi","mantosh","sashi","manoj"];

echo in_array("ravi", $array2);


echo array_search("ravi",$array2);

echo "<br><br><hr>";

$array4 = ["red","green","blue","tomato"];
$car = ["truck","bike","cycle"];

$newarray = array_replace($array4,$car);

print_r($newarray);


echo "<br><br><hr>";

//array pop array push

$color = ["red","blue","green","black","purpel"];

array_pop($color);

print_r($color);

echo "<br><br><hr>";

$fruit = ["mango","apple","banana","grapes"];

array_push($fruit, "python","javascript");
print_r($fruit);

echo "<br><br><hr>";

$bike = ["hyndai","ninja","davidson","mustag"];

array_shift($bike);

print_r($bike);

echo "<br><br><hr>";

$bike1 = ["hyndai","ninja","davidson","mustag"];

array_unshift($bike1, "lamborgini","rollce royce");

print_r($bike1);

echo "<br><br><hr>";

$color1 = ["red","green","black","purple"];
$color2 = ["orange","voilet","blue"];


$newcolor = array_merge($color1,$color2);

echo "<pre>";
print_r($newcolor);
echo "</pre>";

echo "<br><br><hr>";

//array_slice
//It return new array.

$car = ["lamborgini","hyndai","maruti","tesla","kia","tata"];

$newcar = array_slice($car, 2, 3, true);


print_r($newcar);


echo "<br><br><hr>";

//array_splice function
//it not return any new array, it change in exeisting array.


$mark1 = ["apple","banana","mango","stwberry","grapes"];

$mark2 = ["motocorp","lembo","feild"];



array_splice($mark1,1,3,$mark2);
print_r($mark1);

echo "<br><br><hr>";

$key = ["a"=>"apple","b"=>"banana","c"=>"comos","d"=>"dimple"];

$newkey = key_exists("a",$key);
print_r($newkey);


echo "<br><br><hr>";

//string function

$string = "my name is manish kumar";

echo strlen($string) . "<br>";

echo str_word_count($string) . "<br>";

echo substr($string, 3,10) . "<br>";

echo str_replace("manish","rakesh",$string) . "<br>";

echo strpos($string,"manish"). "<br>";

echo ucwords($string) . "<br>";

echo strtoupper($string) . "<br>";
echo strtolower($string) . "<br>";

print_r(str_split($string, 2));

echo "<br><br><hr>";

$string1 = "my name is 'manish kumar'";


$newstr = addslashes($string1);
echo $newstr;

$newstr1 = stripslashes($newstr);
echo $newstr1;




















?>