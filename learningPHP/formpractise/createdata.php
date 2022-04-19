<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "formdata";


$conn = mysqli_connect($server,$username,$password,$dbname);
if(isset($_POST["submit"])){

    // if($_SERVER["REQUEST_METHOD"] == "POST"){
        
    if(!empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["repassword"]) && !empty($_POST["gender"])){


        

        $first_Name = $_POST["fname"];
        $last_Name = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password = $_POST["repassword"];
        $gender = $_POST["gender"];


        $query = "INSERT INTO newform(firstname,secondname,email,userpassword,repassword,gender)VALUES('$first_Name','$last_Name','$email','$password','$password','$gender')";
        $run = mysqli_connect($conn,$query) or die(mysqli_error());

        if($run){
            echo "all file submitted";
        }else{
            echo "File not submitted";
        }

    }else{
        echo "Error Occured";
    }

?>