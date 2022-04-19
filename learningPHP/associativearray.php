<?php

//Associative array is kind of array which is used to define keys at the place of index of aary.
//e.g -- >  [0] --> "any name or interger value should be used"
//Associative array is mainly used with data base with php.




// $newArray = ["manish", "vikash", 19, 90, True, False, NULL];


// echo "<pre>";
// echo var_dump($newArray);
// echo "</pre>";


//Associative array is kind of array which is used to define keys at the place of index of aary.
//Associative array example

$newArray1 = [

           "new1" => "manishkumar",
           "new2" => "amitkumar", //--> This is Value and left side is "Keys"
           "new3" => 19,
           "new5" => 90,
           "new6" => True,
           "new7" => False,
           "new8" => NULL


            ];

echo "<pre>";
print_r($newArray1);
echo "</pre>";

echo "<br><br><br>";

echo $newArray1["new3"] . "<br>";
echo $newArray1["new5"] . "<br>";
echo $newArray1["new6"] . "<br>";
echo $newArray1["new7"] . "<br>";
echo $newArray1["new8"] . "<br>";

// echo "<br><br><br>";

// echo "<ul>";
// echo "<li>" . $newArray1["new1"] . "</li><br>";
//Associative array can also call by their key name.
// echo $newArray1["new3"] . "<br>";
// echo $newArray1["new5"] . "<br>";
// echo $newArray1["new6"] . "<br>";
// echo $newArray1["new7"] . "<br>";
// echo $newArray1["new8"] . "<br>";
// echo "</ul>";



// echo "<br><br>";
// $newArray1["new1"] = "kumarmanish";
// echo $newArray1["new1"];
// echo "<br><br>";


// echo "<pre>";
// echo var_dump($newArray1);
// echo "</pre>";

// print_r($newArray1);



?>