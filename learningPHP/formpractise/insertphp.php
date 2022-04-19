<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "manish";

$conn = mysqli_connect($server,$username,$password,$dbname);

// if(isset($_POST["submit"])){
//     if(!empty($_POST["username"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["userpassword"])){
        
        $username = $_POST["username"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $userpassword = $_POST["userpassword"];

        $query = "INSERT INTO manish_data(username,email,phone,userpassword) VALUES('$username','$email','$phone','$userpassword')";
        

        $run = mysqli_query($conn, $query) or die(mysqli_error($conn));

        header("location: http://localhost/learningPHP/formpractise/myformdata.php");

        mysqli_close($conn);
//    if($run){
//        echo "data submitted ";
//    }else{
//        echo "Not submitted";
//    }


// }else{
//     echo "error";
        
// }
// }


?>