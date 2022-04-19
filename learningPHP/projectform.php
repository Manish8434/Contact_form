<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Example</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="stylecss.css">
</head>

<body>

    <?php
    // //User Input

    $first_Name = "";
    $last_Name = "";
    $email = "";
    $password = "";
    $gender = "";

    //Error Part

    $firstName_Error = "";
    $lastName_Error = "";
    $email_Error = "";
    $password_Error = "";
    $password_Error2 = "";
    $gender_Error = "";



    if(isset($_POST['submit'])) {
        if (empty($_POST["fname"])) {
            $firstName_Error = "First name is Required";
        } else {
            $first_Name = print_Data($_POST["fname"]);
            if (!preg_match("/^[a-zA-z]*$/", $first_Name)) {
                $firstName_Error = "Name format is inncorrect";
            }
        }
        if (empty($_POST["lname"])) {
            $lastName_Error = "Last Name is Required";
        } else {
            $last_Name = print_Data($_POST["lname"]);
            if (!preg_match("/^[a-zA-z]*$/", $last_Name)) {
                $lastName_Error = "Name format is incorrect";
            }
        }
        if (empty($_POST["email"])) {
            $email_Error = "Email is Required";
        } else {
            $email = print_Data($_POST["email"]);
            if (!preg_match("/^[a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3}$/", $email)) {
                $email_Error = "Email format is incorrect";
            }
        }
        if (empty($_POST["password"])) {
            $password_Error = "Password is Required";
        } else {
            $password = print_Data($_POST["password"]);
            if (strlen($password) < 8) {
                $password_Error = "password should not e less than 8 charxter";
            } else {
                if (!preg_match("/^[A-Za-z]+@+[0-9]$/", $password)) {
                    $password_Error = "Password should contain special character, upper case, lower case";
                }
            }
        }
        if (empty($_POST["repassword"])) {
            $password_Error = "Password is Required";
        } else {
            $password = print_Data($_POST["repassword"]);
        }
        if ($_POST["repassword"] == $_POST["password"]) {
            $password =  print_Data($_POST["password"]);
        } else {
            $password_Error2 = "Password is not matched";
        }
        if (empty($_POST["gender"])) {
            $gender_Error = "Gender is Required";
        } else {
            $gender = print_Data($_POST["gender"]);
        }
    }

    function print_Data($data)
    {

        // $data = convert_uuencode($data);
        return $data;
    }

    ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div id="ui">
                    <h1 class="text-center">REGISTRATION FORM</h1>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off" class="form-group text-center">
                        <div class="row">
                            <div class="col-lg-6">
                                <label>First Name</label>
                                <input type="text" name="fname" class="form-control" placeholder="Enter your First Name.." value="<?php echo $first_Name; ?>">
                                <span class="error"> <?php echo $firstName_Error; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <label>Last Name</label>
                                <input type="text" name="lname" class="form-control" placeholder="Enter your Last Name.." value="<?php echo $last_Name; ?>">
                                <span class="error"> <?php echo $lastName_Error; ?></span>
                            </div>
                        </div>
                        <br>
                        <label>Email-Id</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Your Email" value="<?php echo $email; ?>">
                        <span class="error"> <?php echo $email_Error; ?></span>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter your Password.." value="<?php echo $password; ?>">
                                <span class="error"> <?php echo $password_Error; ?></span>
                            </div>
                            <div class="col-lg-6">
                                <label>Re:Type Password</label>
                                <input type="password" name="repassword" class="form-control" placeholder="Re-Type your password.." value="<?php echo $password; ?>">
                                <span class="error"> <?php echo $password_Error; ?></span>
                                <span class="error"> <?php echo $password_Error2; ?></span>

                            </div>
                        </div>
                        <br><br>
                        <select class="form-control" name="gender">
                            <option name="gender">Choose Gender..</option>
                            <option name="gender" value="male">Male</option>
                            <option name="gender" value="female">Female</option>
                            <option name="gender" value="other">Others</option>
                            <span class="error"> <?php echo $gender_Error; ?></span>

                        </select>
                        <br>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary btn-block btn btn-lg">
                    </form>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    <!-- ALL INPUT DATA WILL DISPLAY HERE -->

    <?php

    if (isset($_POST["submit"])) {
        // // if($firstName_Error == "" && $lastName_Error == "" && $email_Error = ""){
        if ($first_Name != "" && $last_Name != "" && $email != "" && $password != "" && $_POST["password"] == $_POST["repassword"]) {
            if ($firstName_Error == "" && $lastName_Error == "" && $email_Error == "" && $password_Error == "" && $password_Error2 == "") {

                echo "<h1 class = 'new_heading'>Form Submitted Succesfully</h1>";

                echo "<h3 class = 'new_para'>";
                echo ucwords($first_Name . " " . $last_Name);
                echo "<br>";
                // echo ucwords($last_Name);
                // echo "<br>";
                echo $email;
                echo "<br>";
                echo sha1($password);
                echo "<br>";
                echo $gender;

                echo "</h3>";
            } else {
                echo "";
            }
        }
    }



    ?>

</body>

</html>