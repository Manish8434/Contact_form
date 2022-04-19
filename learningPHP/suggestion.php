<?php

include("connection.php");
$first_Name = $email = "";

$firstName_Error = $email_Error = "";

if(isset($_POST['submit'])) {
    if (empty($_POST["username"])) {
        $firstName_Error = "First name is Required";
    } else {
        $first_Name = $_POST["username"];
        if (!preg_match("/^[A-za-z]*$/", $first_Name)) {
            $firstName_Error = "Name format is inncorrect";
        }
        
    }

    if (empty($_POST["email"])) {
        $email_Error = "Email is Required";
    } else {
        $email = $_POST["email"];
        if (!preg_match("/^[a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3}$/", $email)) {
            $email_Error = "Email format is incorrect";
        }
        // $first_Name = $_POST['username'];
        // $email = $_POST['email'];
    }
    if($firstName_Error == "" && $email_Error == ""){

        $query1 = "SELECT * FROM form2 WHERE email = '$email'";
        $run = mysqli_query($conn,$query1);

        $data = mysqli_num_rows($run);

        if($data == 0){

    $query = "INSERT INTO form2(name,email)VALUES('$first_Name','$email')";

    $run = mysqli_query($conn,$query);

    if($run){
        echo "inserted";
    }else{
        echo "failed";
    }
        }else{
            $email_Error = "Email is already exist";
        }

}else{
    echo "please filled valid data";
}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>
<body>
    <div>
        <h1>
            Form
        </h1>
    </div>
    <div class="form_control">
        <form action="" method="post">
            <div class="form_data">
                <label for="">Name</label>
                <input type="text" name="username" value="">
                <br><span><?php echo "*" . $firstName_Error; ?></span>
                <span></span>
            </div>
            <div class="form_data">
                <label for="">Email</label>
                <input type="text" name="email" value="">
                <br><span><?php echo $email_Error; ?></span>
                <span></span>
            </div>
            <input type="submit" name="submit" value="submit">
        </form>
    </div>
</body>
</html>