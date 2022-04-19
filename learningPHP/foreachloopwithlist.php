<?php


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

echo "<br><br><hr>";


//Example with Associative Array


$assoarray = [
              [
                  "id" => "1",
                  "name" => "ravi",
                  "designation" => "Sales manager",
                  "department" => "Digital marketing",
                  "Salary" => 60000
              ],
              [
                "id" => "2",
                "name" => "aakash",
                "designation" => "Sales manager",
                "department" => "Digital marketing",
                "Salary" => 40000
              ],
              [
                "id" => "3",
                "name" => "nitesh",
                "designation" => "Sales manager",
                "department" => "Digital marketing",
                "Salary" => 30000
              ]






               ];
echo "<table border = '2px' cellpadding = '5px' cellspacing = '0'>";
echo "<tr>;
                <th>Emp Id</th>
                <th>Name</th>
                <th>Designation</th>
                <th>Department</th>
                <th>Salary</th>
                </tr>";
foreach($assoarray as list("id" => $id,"name" => $name,"designation" => $designation,"department" => $department,"Salary" => $salary)){
    echo "<tr><td>$id</td> <td> $name</td> <td>$designation</td> <td>$department</td> <td>$salary</td>";
}
echo "<table>";
?>