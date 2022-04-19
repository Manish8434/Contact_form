<?php

// // Recursive Function

// function myFunction($num){

//     if($num <= 10){

//         echo $num . "<br>";
//         myFunction($num + 1);
//     }
// }
// myFunction(0);

// echo "<br><hr>";
// //Find out the factorial of number using recursive function.

// function newFunction($n){

//     if($n == 0){
//         return 1;
//     }else{
//         return ($n * newFunction($n - 1));
//     }
// }
// $result = newFunction(5);
// echo $result;


// echo "<br><br><hr>";

// //Declaration of constant variabels 


// define("new0",100);
// define("new1", 200);
// define("new2",300);

// echo new0 + new1 + new2;

// //constant variables is only call by name without dollar sign.

// echo "<br><br><hr>";


// //Data Types

// $name1 = 'manish kumar';
// $name2 = "manish kumar";

// echo $name1 . "  " . $name2;
// echo "<br>";
// echo var_dump($name1, $name2);

// echo "<br>";

// $num1 = 12345;
// $num2 = 234.908;

// echo $num1 + $num2;
// echo "<br>";
// echo var_dump($num1, $num2);



// echo "<br><hr>";

// $state = true;
// $state1 = false;

// echo $state;
// echo "<br>";
// echo "i am" . $state1;
// echo "<br>";

// echo var_dump($state, $state1);


// echo "<br><hr>";



// $num10 = 100;
// $num11 = 100;

// echo ($num10 < $num11);
// echo "<br><hr>";
// echo ($num10 == $num11);
// echo "<br><hr>";
// echo ($num10 === $num11);


// echo "<br><hr>";


// function royalEnfield(){

//     $model_Name = "";
//     $color = "red";
//     $price = 10000000;
//     $launched = 20;

//     return $model_Name;
// }
// $result10 = royalEnfield();
// echo $result10;
// echo "<br><hr>";

// echo var_dump(royalEnfield);

// echo '<br>';


// //do while loop;



// $i = 11;
// $num = 10;

// do{

//     echo "This is do while loop";
//     echo "<br>";
//     $i++;
// }while($i < 10);

// print "<br><hr>";
// print "my name is manish kumar";

// echo "<br><br><hr>";


// //For Loop

// //we add sum of given number


// $n1 = 12811;
// $c = 0;
// $sum01 = 0;

// for($i = 0; $i <= strlen($n1); $i++){

//     $c = $n1 % 10;
//     $sum01 = $sum01 + $c;

//     $n1 = (float)($n1 / 10);
// }
// echo "sum of the number is " . $sum01;


// print "<br><br><hr>";


// //find out the reverse number

// $n2 = 123456;
// $revnum = 0;
// $nw = 0;

// while ($n2 != 0){

//     $c = $n2 % 10;
//     $revnum = ($revnum * 10) + $c;
//     $nw++;
//     $n2 = (int)($n2 / 10);
// }
// echo $nw;
// print "<br>";
// echo $revnum;

// print "<br><br><hr>";


// function addition(){

//     $y = 100;
//     $z = 200;
//     $a = $y + $z;
//     echo $a;
// }
// addition();


// echo "<br><br<hr>";


// //calcuate percentage

// function percentage($x, $y, $z){

//     // $marks1 = 100;
//     // $marks2 = 200;
//     // $marks3 = 200;

//     $totalMarks = $x + $y + $z;
//     $percentage = $totalMarks / 3;
//     return $percentage;
// }
// $percent = percentage(100, 70, 60);
// echo (float)($percent);

// echo "<br><br><hr>";


// //variable Function

// $newAge = function($age){

//     if($age > 18){
//         return "You can vote";
//     }else{
//         return "You are not eligible";
//     }
// };

// $res4 = $newAge(16);
// echo $res4;

// echo "<br>";

// if($res4 == "You can vote"){
//     echo "welcome to India";
// }else{
//     echo "Go back to make voter id card";
// }



// echo "<br>";
// echo "<br>";
// echo "<br>";

// //goto Statement.

// echo "My name is manish Kumar<br>";
// echo "My name is manish Kumar<br>";
// goto abc;
// echo "My name is manish Kumar<br>";

// abc:
// echo "I am new code at php file<br>";
// echo "The new code is here";

// echo "<br><hr>";


// $marks = 31;
// $grade;

// if($marks >= 80 && $marks <= 100){
//     $grade = "A";
// }elseif($marks >= 60 && $marks < 80){
//     $grade = "B";
// }elseif($marks >= 40 && $marks < 60){
//     $grade = "C";
// }elseif($marks >= 33 && $marks < 40){
//     $grade = "D";
// }else{
//     $grade = "You are Fail !!";
// }
// echo "Your grade is " . " " .  $grade;


// echo "<br><br><hr>";


// //Turnary Operator

// $result = 25;

// $result = ($result > 33)? "You are pass" : "You are Fail";

// echo $result;

// echo "<br><br><hr>";

// $dayCount = 8;
// $day;

// switch($dayCount){

// case 1:
//     $day = "Today is maonday";
//     break;

// case 2:
//     $day = "Today is tuesday";
//     break;

// case 3:
//     $day = "Today is Wednesday";
//     break;

// case 4:
//     $day = "Today is Thursday";
//     break;

// case 5:
//     $day = "Today is Friday";
//     break;

// case 6:
//     $day = "Today is Saturday";
//     break;

// case 7:
//     $day = "Today is Sunday";
//     break;

// default:
// $day = "Invalid dayCount";



// }
// echo $day;

// echo "<br><br><hr>";


// //recursive function


// function Mynum($num){

//     if($num <= 10){
//         echo "Manish Kumar";
//         echo "<br>";
//         myNum($num + 1);
//     }
// }
// myNum(0);

// function factorial($n6){

//     if($n6 == 0){
//         return 1;
//     }else{
//         return ($n6 * factorial($n6 - 1));
//     }
// }
// $value = factorial(5);
// echo $value;

// echo "<br>";

// $string20 = "I am manish kumar, i am from jharkahnd bokaro";

// echo substr($string20, 5, 12);


// //for each loop

// $array1 = [[15,10,110],["manish","deepak","rakesh"],[90,300,190]];


// echo "<table border = '5px'>";
// for($i = 0;$i <3;$i++){
//     for($j = 0;$j < 3;$j++){
//         echo $array1[$i][$j]. " ";
//     }
//     echo "<br>";
// }
// echo "</table>";


//MultiDimensional Array


// $array2 = [
//     [1, "Manish","Area Manager","Digital Marketing",67000],
//     [2, "Ashish","Sales Manager","Learning dev",55000],
//     [3, "Nakul", "Asst Manager", "Social Banking",43000],
//     [4, "Aasmaan", "Manager", "Banking Sector", 34000],
//     [5, "nilkosh", "junior Executive", "Technical dept.", 27000]

//           ];




//   echo "<table border ='2px' cellpadding = '5px' cellspacing = '0'>";
  
//   echo "<tr>;
//        <th>Emp Id</th>;
//        <th>Emp Name</th>;
//        <th>Designation</th>;
//        <th>Department</th>;
//        <th>Salary</th>;
//        </tr>";
//     for($i = 0;$i < 5;$i++){
//         echo "<tr>";
//         for($j = 0;$j < 5;$j++){

//              echo "<td>";
//              echo $array2[$i][$j];
//              echo "</td>";

//         }
//         echo "</tr>";
//     }
//     echo "</table>";

//     echo "<br><br><br><hr>";


//     //Same will be written also in for each loop

//     $array3 = [
//         [1, "Manish","Area Manager","Digital Marketing",67000],
//         [2, "Ashish","Sales Manager","Learning dev",55000],
//         [3, "Nakul", "Asst Manager", "Social Banking",43000],
//         [4, "Aasmaan", "Manager", "Banking Sector", 34000],
//         [5, "nilkosh", "junior Executive", "Technical dept.", 27000]
    
//               ];

// echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
// echo "<tr>;
//       <th>Emp Id</th>;
//       <th>Emp Id</th>;
//       <th>Emp Id</th>;
//       <th>Emp Id</th>;
//       <th>Emp Id</th>;
//       </tr>";
//     foreach($array3 as $value1){
//         echo "<tr>";
//         foreach($value1 as $value2){
//             echo "<td>$value2</td>";
//         }
//         echo "</tr>";
//     }


//     echo "<br><br><br><hr>";

//     //same array should be printed with help of foe each loop with list function.


    $array4 = [
        [1, "Manish","Area Manager","Digital Marketing",67000],
        [2, "Ashish","Sales Manager","Learning dev",55000],
        [3, "Nakul", "Asst Manager", "Social Banking",43000],
        [4, "Aasmaan", "Manager", "Banking Sector", 34000],
        [5, "nilkosh", "junior Executive", "Technical dept.", 27000]
    
              ];


echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
echo "<tr>;
     <th>Emp Id</th>
     <th>Name</th>
     <th>Designation</th>
     <th>Department</th>
     <th>Salary</th>
     </tr>";
foreach($array4 as list($id,$name,$designation,$department,$salary)){

      echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$department</td> <td>$salary</td></tr>";


}
echo "</table>";

echo "<br><hr>";

//Array method of count() and sizeof()

$array7 = ["amit", "manish", 55, 80, 100, "sam ali"];

echo count($array7) ."<br>";
echo sizeof($array7);


echo "<br><hr>";

//Array method of in_array() and serach();
//if it is found value is 1 and if not value is 0.


$array8 = ["manish", "ravi", "rajesh", 89, 190];
$result;

echo in_array("manish", $array7);

echo "<br><hr>";

if(in_array("rajesh", $array8)){

$result = "This is found";
}else{
    $result = "This word is not found";
}
echo $result;
echo "<br><br>";

echo array_search(190, $array8);


echo "<br><br>";


//Array_replace and Array_replace_recursive. (Associative Array)

$array10 = ['a' => [10,20,30],'b' => ["manish", "aakash", "vikash"],["mantosh", 99, 190]];
$array11 = ['a' => [70,80],'b' => ["lokesh", "navneet", "limca"],["rantoshing", 150]];

$newarray1 = array_replace($array10, $array11);

echo "<pre>";
print_r($newarray1);
echo "</pre>";

echo "<br><br>";

//Simple index Array Example

$newArray2 = [100, 200, "linkot", "music"];
$newArray3 = ["rotag", "newborn", "batman", 100, 400, 800];

$newArray5 = array_replace($newArray2, $newArray3);
print_r($newArray5);
echo "<br>";

$newArray6 = array_replace_recursive($newArray3, $newArray2);
print_r($newArray6);

echo "<br><hr>";

//Array pop() and push()

$array12 = ["Tomato", "Potato","Ladyfinger", "Brinjal"];
//Now we apply pop() method.
echo "<pre>";
$newArry11 = array_pop($array12);
print_r($array12);
echo "</pre>";

//Array_push()

$array13 = ["manish", "amit", "rakesh"];

array_push($array13, "samali", "ashok","mantosh");
print_r($array13);


echo "<br><hr>";

$array14 = ["Bolero", "Maruti", "Suzuki", "Motor", "Samarat"];

array_shift($array14);
//Array_shift()
print_r($array14);

echo "<br><br><hr>";

$array15 = ["Suzuki", "Motor", "Samarat"];
//Array_unshift();

array_unshift($array15, "manish", "kumar", "rakesh");
print_r($array15);


echo "<b><br><hr>";

//Array array_merge() , array_merge_recursive() , array_combine


//Array array_merge()

$myArray1 = ["digital", "Technical", "Bullshop", "Levies"];
$myArray2 = ["london", "brazil", "aakash"];

$newArray1 = array_merge($myArray, $myArray2);

echo "<pre>";
print_r($tArray);
echo "</pre>";


//Array array_merge_recursive()

//Example 1

$myArray3 = ['a' => "digital", 'b' => "Technical", 'c' => "Bullshop", 'd' => "Levies"];
$myArray4 = ['a' => "london", 'b' => "brazil", "aakash"];

$mArray = array_merge($myArray3, $myArray4);

echo "<pre>";
print_r($mArray);
echo "</pre>";


echo "<b><br><hr>";

//Example 2

$myArray4 = ['a' => "digital", 'b' => "Technical", 'c' => "Bullshop", 'd' => "Levies"];
$myArray5 = ['a' => "london", 'b' => ['color' => ["green", "red", "yellow"]], "aakash"];

$narray = array_merge_recursive($myArray4, $myArray5);

echo "<pre>";
print_r($narray);
echo "</pre>";


echo "<b><br><hr>";

$xarray = array_merge($myArray4, $myArray5);
echo "<pre>";
print_r($xarray);
echo "</pre>";

//Array_combine()
//first array display as key and other array is display as key's value.

$myArray = ["digital", "Technical", "Bullshop", "Levies"];
$myArray2 = ["london", "brazil", "aakash", "america"];

$sarray = array_combine($myArray, $myArray2);

echo "<pre>";
print_r($sarray);
echo "</pre>";



echo "<br><br><hr>";

$array10 = [
    [1, "Manish","Area Manager","Digital Marketing",67000],
    [2, "Ashish","Sales Manager","Learning dev",55000],
    [3, "Nakul", "Asst Manager", "Social Banking",43000],
    [4, "Aasmaan", "Manager", "Banking Sector", 34000],
    [5, "nilkosh", "junior Executive", "Technical dept.", 27000]

          ];

echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
echo "<tr>
      <th>Emp id </th>
      <th>Name </th>
      <th>Designation </th>
      <th>Department</th>
      <th>Salray</th>
      </tr>";
foreach($array10 as list($id, $name, $designation, $department, $salary)){
    echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$department</td> <td>$salary</td><br>";
}
echo "</table>";

echo "<br><br><hr>";


$arrayy1 = ["blue", "green", "Black", "yellow"];

// array_shift($arrayy1);
array_unshift($arrayy1, "red", "manish");
echo "<pre>";
print_r($arrayy1);
echo "</pre>";

echo "<br><br><hr>";

$new = ["manish","samrat", "red", "blue"];

// array_pop($new);
array_push($new, "manish","rakesh","orange");

echo "<pre>";
print_r($new);
echo "</pre>";


?>