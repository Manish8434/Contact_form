<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "second";

$conn = mysqli_connect($server, $username, $password, $dbname);

if(isset($_POST["submit"])){
    if(!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["gender"])){
       
        $username = $_POST["name"];
        $email = $_POST["email"];
        $userpassword = $_POST["password"];
        $gender = $_POST["gender"];

        // $query = 'insert into formdata2(name,email,password,gender)values("$name","$email","$password","$gender")';

        $query = "INSERT INTO formdata2(username,email,userpassword,gender)VALUES('$username', '$email', '$userpassword','$gender')";
        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($run){
            echo "data submitted";
        }else{
            echo "error occured";
        }
}else{
    echo "all field to be filled";
}
}

?>