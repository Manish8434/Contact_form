<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form HTML</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #34495E;
        }

        #form_tab {
            background-color: #F2F3F4;
            padding: 30px;
            margin-top: 50px;
            border-radius: 10px;

        }

        #submit_btn {
            margin-top: 20px;
        }
        span{
            color: red;
        }
        .result{
            color: greenyellow;
        }
    </style>
</head>

<body>
    <?php

    $name = $email = $password = $gender = "";
    $name_error = $email_error = $password_error = $gender_error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $name_error = "Name cannot be Empty";
        } else {
            $name = $_POST["name"];
            if(!preg_match("/^[a-zA-Z]*$/", $name)){
                $name_error = "Name format is incorrect";
            }
        }
        if (empty($_POST["email"])) {
            $email_error = "Email cannot be Empty";
        } else {
            $email = $_POST["email"];
            if(!preg_match("/^[a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3}$/", $email)){
                
                $email_error = "Email format is incorrect";
        }
    }
        if (empty($_POST["password"])) {
            $password_error = "Password cannot be Empty";
        } else {
            $password = $_POST["password"];
            if(strlen($password) < 6){
                $password_error = "password should be more than 5 ";
            }else
            if
            (!preg_match("/^[A-Za-z]+@+[0-9]$/", $password)){
                  $password_error = "Password should contain special charecter";
            
            }
        }
        }
        if (empty($_POST["rpass"])) {
            $password_error = "Password cannot be Empty";
        } else {
            $password = $_POST["rpass"];
            if($_POST["rpass"] == $_POST["password"]){
               $password = $_POST["password"];
            }else{
                $password_error = "Password is not matched";
            }
        }
        if (empty($_POST["gender"])) {
            $gender_error = "Please select Your Gender";
        } else {
            $gender = $_POST["gender"];
        }
    



    ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div id=form_tab>
                    <h1 style="color:black;text-align:center">Resigtartion form</h1>
                    <form action="insert.php" method="post" class="form-group text-center" autocomplete="off">

                        <label for="">User Name</label>
                        <input type="text" name="name" value="" class="form-control" placeholder="Enter Your name..">
                        <span> <?php echo $name_error; ?> </span><br>

                        <label for="">Email Id</label>
                        <input type="text" name="email" value="" class="form-control" placeholder="Enter your Email Id..">
                        <span> <?php echo $email_error; ?> </span><br>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="">Password</label>
                                <input type="password" name="password" value="" class="form-control" placeholder="Enter Password..">
                                <span> <?php echo $password_error; ?>  </span><br>
                            </div>
                            <div class="col-lg-6">
                                <label for="">Re-Type Password</label>
                                <input type="password" name="rpass" value="" class="form-control" placeholder="Re-Enter password..">
                                <span><?php echo $password_error; ?></span><br>
                            </div>
                            <br><br><br>
                            <select class = "form-control" name = "gender">
                                <option name="gender">Choose Gender..</option>
                                <option name="gender" value="male">Male</option>
                                <option name="gender" value="female">Female</option>
                                <option name="gender" value="other">Others</option>
                                <span class = "error"> <?php echo $gender_Error; ?></span>
                                
                            </select>
                            <br>
                            <input type="submit" name="submit" value="submit" id="submit_btn" class="btn btn-primary btn-block">
                        </div>



                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

<?php

   //NOW PRINT DATA
// echo '<div class="result">';
//    if(isset($_POST["submit"])){
//        if($name != "" && $email != "" && $password != ""){
//            if($name_error == "" && $email_error == "" && $password_error == ""){
//                echo "<h1> Your Input Data</h1>";

//                echo $name . "<br>";
//                echo $email . "<br>";
//                echo sha1($password) . "<br>";
//                echo $gender;
//        }
//    }
//    }

//    echo '</div>';
    // ?> -->
</body>

</html>