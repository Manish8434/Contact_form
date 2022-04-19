<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>

<body>
    <?php

    $name = "";
    $email = "";
    $name_error = "";
    $email_error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["uname"])) {
            $name_error = "name could not be empty";
        } else {
            $name = my_Data($_POST["uname"]);
            if(!preg_match("/^[a-zA-Z]*$/", $name)){
                $name_error = "Name format is incorrect";
            }
        }
        if (empty($_POST["email"])) {
            $email_error = "email could not be empty";
        } else {
            $email = my_Data($_POST["email"]);
            if(!preg_match("/^[a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3}$/", $email)){
                $email_error = "Email format is invalid";
        }
    }
    }

    function my_Data($data)
    {
        return $data;
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" >
        Name: <br>
        <input type="text" name="uname" value=""><br>
        <span style="color:red"> <?php echo $name_error; ?> </span><br>
        Email:<br>
        <input type="text" name="email" value=""><br>
        <span style="color:red"> <?php echo $email_error; ?> </span><br>
        <input type="submit" name="submit" value="submit">


    </form>

    <?php
    if(isset($_POST["submit"])){
        if($name != "" && $email != ""){
        if($name_error == "" && $email_error == ""){
            echo "This is your input <br><br>";
            echo $name . "<br>";
            echo $email . "<br>";
        } 
    }
}
     
        //  if($name != "" && $email != ""){
        //      echo "<h1" . "this is input" . "</h1>";
        //      echo $name;
        //      echo $email;
        //  }else{
        //      echo "not submitted";
        //  }


    ?>
</body>

</html>