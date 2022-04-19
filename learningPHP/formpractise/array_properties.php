<?php

//count & sizeof -- it return the lenght of array and array count.
//mainly use in multidimensional array, by giveng this value int a variable

$array1 = ["manish","ravi","anmol","mirja","bittu"];
echo count($array1) . "<br>";

$array2 = [
         
        "manish"=>["ravi","aakash","sumit"],
        "bittu"=>["samrat","sunny","rango"],



     
           ];

echo count($array2) . "<br>";

echo count($array2, 1) . "<br>"; //1 is here a module value, if is 0 by default but if we set it as 1 it ill return all the value and count of array.

//sizeof -- it is same as count

echo sizeof($array2) . "<br>";
echo sizeof($array2,1); // it give you complete count of array


echo "<br><br><hr>";

//in_array() and array_search()
//in_array() -- gives you two value, if the search is found it will return true(1), else return false(0).
//Syntax in_array("search_name", array_name);

//example
//in_array

$array4 = ["manish","red","yellow","nutin"];
echo in_array("manish",$array4) . "<br>";
echo in_array("man",$array4); //this will return 0, this search word is not in array.

echo "<br><br><hr>";

//array_search

$array5 = ["manoj","manish","bittu","samrat","ronit"];

echo array_search("ronit",$array5) . "<br>";
echo array_search("ramu",$array5) . "<br>"; //0 will return


echo "<br><br><hr>";

//array_replace() & array_replace_recursive()
//TThis function is used to repalce array to array.
//It will return new array, it cannot change into existing array.

//array_replace() -- this function is used with index array and associative array.
//example

$array11 = ["mango", "apple","grapes","pinapple"];
$array12 = ["red","yellow","green"];

$newarray11 = array_replace($array11,$array12);

echo "<pre>";
print_r($newarray11);
echo "</pre>";

echo "<br><br><hr>";

//Example with associative error
$array13 = ["man"=>"manish","ami"=>"amit","ram"=>"ramesh","sam"=>"samrat"];
$array14 = ["man"=>"yellow","b"=>"red","c"=>"blue"];

$newArray = array_replace($array13,$array14);

echo "<br><br><hr>";

//example with mixed index array and associative array

$array15 = ["red","a"=>"yellow","blue","green"];
$array16 = ["a"=>"manish","b"=>"ramesh","c"=>"kumar"];
$newArray2 = array_replace($array15,$array16);

echo "<pre>";
print_r($newArray);
echo "</pre>";

echo "<br><br><hr>";

echo "<pre>";
print_r($newArray2);
echo "</pre>";

echo "<br><br><hr>";

//pop() & push() --this function is used to replace last array in array and add in last array.

//pop() -- this function is used to repalce array from last.
//example -1


$array20 = ["manish","blue","green","tomato","pink"];

array_pop($array20);

print_r($array20);

echo "<br>";

array_push($array20, "anil");

print_r($array20);


echo "<br><br><hr>";


$array21 = ["green","yellow","grapes","tomato"];

array_shift($array21);

print_r($array21);

echo "<br><br><hr>";
$array22 = ["green","yellow","grapes","tomato"];

array_unshift($array22,"cotocus");
print_r($array22);

echo "<br><br><hr>";
//array_merge() -- it is used with index array
// array_merge_recursive() --used with complex array, multidimensional
//array_combine() -- it will combine array as first array into key and second into its value



$color = ["color1"=>"red","color2"=>"blue","color3"=>"green","color4"=>"yellow"];
$color2 = ["man","kum","color4"=>"sum","color4"=>"rum"];

$newArray11 = array_merge($color,$color2);
echo "<pre>";
print_r($newArray11);
echo "</pre>";

echo "<br><br><hr>";

$newArray12 = array_merge_recursive($color,$color2);

echo "<pre>";
print_r($newArray12);
echo "</pre>";


//array_combine()

$food = ["mango","red","yellow"];
$food2 = [1,2,3];

$newArray15 = array_combine($food,$food2);

echo "<pre>";
print_r($newArray15);
echo "</pre>";

echo "<br><br><hr>";

//array_slice -- this function return the replcae array in new array form.

$array20 = ["manish","color","red","yellow","truck"];
$array21 = ["a"=>"manish","b"=>"color","c"=>"red","d"=>"yellow","e"=>"truck"];

$newArray9 = array_slice($array21,1,2);

echo "<pre>";
print_r($newArray9);
echo "</pre>";

echo "<br><br><hr>";
//array_splice() -- this function is used to replace array and return same array with replace element of array

$array50 = ["car","bike","bycycle","monster","rocket"];
$array51 = ["red","green"];

array_splice($array50,1,count($array50),$array51);

echo "<pre>";
print_r($array50);
echo "</pre>";

echo "<br><br><hr>";

//array_keys() all function

//array_keys() -- return all keys of array, mainly used in associative array. it return keys in new array.

$man = ["man"=>"green","kl"=>"airoplane","lo"=>"mango","no"=>"mukesh"];

$newman = key_exists("man",$man);

echo "<pre>";
print_r($newman);
echo "</pre>";

if($newman){
echo "exist";
}else{
echo "not exist";
}


echo "<br><br><hr>";


$oop = ["fruit","mango","car","devops","sunlight"];

$oop2 = array_chunk($oop,2);

echo "<pre>";
print_r($oop2);
echo "</pre>";


echo "<br><br><hr>";

//array_flip() & array_change_key_case_
//array_flip() -- reverse the keys to value and value to keys


$ok = ["ON"=>"monkey","PRO"=>"javascript","GO"=>"PHP"];

$ok1 = array_flip($ok);

echo "<pre>";
print_r($ok1);
echo "</pre>";

$ok2 = array_change_key_case($ok, CASE_UPPER);

echo "<pre>";
print_r($ok2);
echo "</pre>";

echo "<br><br><hr>";

//array_sum() and array_product()

$aon = [2,5,9,10,12];

echo "sum = " . array_sum($aon) . "<br>";
echo "product = " . array_product($aon);

echo "<br><br><hr>";

$exact = ["green","red","blue","creamy","shakti","yellow"];

$newexact = array_rand($exact, 2);

echo "<pre>";
print_r($newexact);
echo "</pre>";


echo "<br><br><hr>";


$money = ["g1"=>"rocket","g2"=>"missile","g3"=>"valorant","g4"=>"pubg","g5"=>"freefire"];

// foreach($money as $value10){
//     echo $value10 . "<br>";
// }

// foreach($money as $value11 =>$value12){
//     echo $value11 . " = " . $value12 ."<br>";
// }


$fresh = [

         [1,"manish","senior","marketing",15000],
         [2,"ronit","junior","digital",25000],
         [3,"rakesh","associate","IT",34000]





];

foreach($fresh as list($id,$name,$position,$department,$salary)){
    echo "$id $name $position $department $salary <br>";
}


//slice

$mano = ["local","country","state","city","jharkhand"];
$mano = ["a"=>"local","b"=>"country","c"=>"state","d"=>"city","e"=>"jharkhand"];

$mano1 = array_slice($mano,1,2);

echo "<pre>";
print_r($mano1);
echo "</pre>";


echo "<br><br><hr>";

$mano3 = ["local","country","state","city","jharkhand"];
$mano4 = ["a"=>"local","b"=>"country","c"=>"state","d"=>"city","e"=>"jharkhand"];

array_splice($mano3,1,3,$mano4);

echo "<pre>";
print_r($mano3);
echo "</pre>";

echo "<br><br><hr>";
$mano5 = ["a"=>"local","b"=>"country","c"=>"state","d"=>"city","e"=>"jharkhand"];

$newmano = array_key_last($mano5);
echo "<pre>";
print_r($newmano);
echo "</pre>";

echo "<br><br><hr>";

$mano3 = ["local","country","state","city","jharkhand"];

shuffle($mano3);

echo "<pre>";
print_r($mano3);
echo "</pre>";
// echo $mano3[$newmano1];

echo "<br><br><hr>";

$v = ["a","b","c","d","e","f"];

//this function is used to give array value as key to a fixed value array set.
//It return new array

$newv = array_fill_keys($v, "cotocus");

echo "<pre>";
print_r($newv);
echo "</pre>";


$newv1 = array_fill(3,6,"sector");

echo "<pre>";
print_r($newv1);
echo "</pre>";

echo "<br><br><hr>";

//array_map() --- this function is usedto run a special function for every value of array at the same time.
//It return the new array.

//Example 1 (Index Array)
$fine = [1,3,6,8,10];

$newfine = array_map("square", $fine);

echo "<pre>";
print_r($newfine);
echo "</pre>";


function square($val1){
    return $val1 * $val1;
}


echo "<br><br><hr>";

//Example 2 (associative array)


$fine2 = ["a"=>"apple","b"=>"red","c"=>"ladyfinger","d"=>"rocket"];

$newfine2 = array_map("number", $fine2);

echo "<pre>";
print_r($newfine2);
echo "</pre>";

function number($l){
   return "array value is : " . $l;
}

echo "<br><br><hr>";

//example 3 (with multiple array)

$fine3 = [1,2,3,4,5,6];
$fine4 = ["a"=>"apple","b"=>"red","c"=>"ladyfinger","d"=>"rocket","e"=>"missile","f"=>"ak47"];

$newfine10 = array_map("merge", $fine3, $fine4);


echo "<pre>";
print_r($newfine10);
echo "</pre>";


function merge($w, $y){
return htmlspecialchars("$w = $y");

}


echo "<br><br><hr>";


//array_reducr()
//This function is same as map, run for every value of array and return a new array.
//It has three parameter, 1- array_name, 2-function_name, 3- initial value
//it has two parameter to pass in function, first one is empty, work as carrier, and second have all array value.

//Example 1

$menu = [1,2,5,7,8,10];

$newmenu = array_reduce($menu,"reduce"); //this is initial value which is going in first parameter.


echo "<pre>";
print_r("Sum of all value is :" . $newmenu);
echo "</pre>";


function reduce($f1,$f2){
return $f1 . "-" . $f2;
}

echo "<br><br><hr>";

//ARRAY SORTING FUNCTION
//sort(), rsort(), asort(), arsort(), ksort(), krsort(), natsort(),natcasesort(),array_multiple(), array_reverse()
//only array_reverse return new array.



//example 1

$sort = ["kite","flight","rocket","gun","magnum","bullet"];

//example 2 (associative array)
$asso = ["k"=>"manish","c"=>"makon","z"=>"rishm","d"=>"esport","y"=>"loco"];

// sort($sort);--put in acesnding order.
// rsort($sort); --put in descending order.
// asort($asso);--put in acending order.
// arsort($asso);--put in decending order.
// ksort($asso);--put associative array in acending order.
// krsort($asso);-- put in reverse order.
$newasso = array_reverse($asso);

// echo "<pre>";
// print_r($sort);
// echo "</pre>";
echo "<pre>";
print_r($newasso);
echo "</pre>";


echo "<br><br><hr>";

//ARRAY TRASVERSING FUNCTION
//current(), key(), pos(), both pos and current is same.
//prev(), next(), end(), each(), reset()


// examle 1


$trave = ["pubg","freefire","rocket","emulater","sunshine","golfgame"];


echo "Current position is :" . current($trave) . "<br>";
echo "Current key is :" . key($trave) . "<br>";


next($trave);
echo "Current position is :" . current($trave) . "<br>";
echo "Current position is :" . current($trave) . "<br>";


prev($trave);
echo "Current position is :" . current($trave) . "<br>";

end($trave);
echo "Current position is :" . current($trave) . "<br>";
echo "Current position is :" . pos($trave) . "<br>";


echo "<pre>";
print_r(each($trave));
echo "</pre>";


echo "<br><br><hr>";

//ARRAY LIST FUNCTION

$cosmos = ["mercury","venus","earth","mars","jupiter"];

list($a,$b,$c,$d,$e) = $cosmos;

echo $a . "<br>";
echo $b . "<br>";
echo $c . "<br>";
echo $d . "<br>";
echo $e . "<br>";

//we can also create a single different array;

list($a[0],$a[3],$a[1],$a[4],$a[2]) = $cosmos;

echo $a[0] . "<br>";
echo $a[1] . "<br>";
echo $a[2] . "<br>";
echo $a[3] . "<br>";
echo $a[4] . "<br>";

//advance string function

//addslashes(/)

$newString = "My 'name' is 'manish kumar'";
$newString1 = addslashes($newString);
echo $newString1;
echo "<br>";

echo stripslashes($newString1) . "<br>";

//md5 and sha1

$newString3 = "Manish Kumar";
$newString10 = md5($newString3);

echo $newString10 . "<br>";
echo sha1($newString10) . "<br>";

//uuencode and uudecode.

$finalString = "Devopsschool@1";
$finalString1 = convert_uuencode($finalString);

echo $finalString1 . "<br>";

echo convert_uudecode($finalString1) . "<br>";

echo "<br><br><hr>";

//bin2hex and hex2bin

$finalString3 = "Manish Kumar";
$finalString4 = bin2hex($finalString3);
echo $finalString4 . "<br>";
echo hex2bin($finalString4);


echo "<br><br><hr>";


//Date all properties
//Day properties

echo date("d") . "<br>";
echo date("j") . "<br>";
echo date("S") . "<br>";

echo "<br><br><hr>";
//Month properties

echo date("F") . "<br>";
echo date("m") . "<br>";
echo date("M") . "<br>";
echo date("n") . "<br>";

//Year properties

echo date("y") . "<br>";
echo date("Y") . "<br>";

//day year properties

echo date("D") . "<br>";
echo date("I") . "<br>";
echo date("N") . "<br>";
echo date("w") . "<br>";

//Time format 

//Hour format
echo date("H") . "<br>";
echo date("h") . "<br>";
echo date("G") . "<br>";
echo date("g") . "<br>";

//Minute format

echo date("i") . "<br>";

//Second Format

echo date("s") . "<br>";

//am/AM format

echo date("a") . "<br>";
echo date("A") . "<br>";

//Full format date 

echo date("h:i:s A ") . "<br>";

?>