<?php

//Multi - Dimensional Array.

$newArray = [
            
    [1, "Mukesh", "Manager", "Digital Marketing", 50000],
    [2, "Nitesh", "Asst Manager", "Software Develoer", 35000],
    [3, "Nilotma", "Senior Manager", "Tech team", 76000],
    [4, "ritesh", "Junior Manager", "SEO", 15000],
    [5, "Rakesh", "Area Manager", "Sales Marketing", 40000]

            ];

//Hera we gonna put all this data in tabular Form with the help of FOR Loop.

for($i = 0;$i < 5;$i++){
    for($j = 0;$j < 5;$j++){

      echo $newArray[$i][$j] . " ";

    }
      echo "<br>";     //After each rotation it will take a break line.
}

echo "<br><br><hr>";
//We can also make this in Table form.
echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>"; // using TABLE in html.
echo "<tr>;

       <th>Emp Id</th>
       <th>Emp Name</th>
       <th>Emp Designation</th>
       <th>Emp Department</th>
       <th>Emp Salary</th>
       </tr>";

for($i = 0;$i < 5;$i++){
    echo "<tr>";
    for($j = 0;$j < 5;$j++){

     
      echo "<td>" . $newArray[$i][$j] . "</td>";
     
    }
      echo "</tr>";   //After each rotation it will take a break line.
}

echo "</table>";

echo "<br><br><hr>";


//Same Multi-dimensional Array we can write in FOR Each loop too.
//lets take a example.

$newArray1 = [
            
    [1, "Manish", "Manager", "Area Manager", 73000],
    [2, "Kumar", "Senior Manager", "Tech team", 65000],
    [3, "Kumari Puja", "Junior Manager", "Technical deptt", 66000],
    [4, "Nillu Kumari", "Asst Manager", "Software Devloper", 35000],
    [5, "Sita prasad", "Software Develoer", "Sales Area Manager", 48000]



            ];

//we can also write it in Table Format.

echo "<table border = '1px' cellpadding = '5px' cellspacing = '0'>";
echo "<tr>;

       <th>Emp Id</th>
       <th>Emp Name</th>
       <th>Emp Designation</th>
       <th>Emp Department</th>
       <th>Emp Salary</th>
       </tr>";

foreach($newArray1 as $value1){
     
    echo "<tr>";
    foreach($value1 as $value2){

      echo "<td>$value2</td>";

    }
    echo "<tr>";
}
echo "</table>";


?>