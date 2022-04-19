<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link rel="stylesheet" href="mystyle.css">
    
</head>
<body>
<?php
//User Input

$first_Name ="";
$last_Name = "";
$email = "";
$password = "";
$gender = "";

//Error Part

$firstName_Error = "";
$lastName_Error = "";
$email_Error = "";
$password_Error = "";
$gender_Error = "";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["fname"])){
       $firstName_Error = "First name is Required";
   }else{
    $first_Name = $_POST["fname"];
   }
   if(empty($_POST["lname"])){
       $lastName_Error = "Last Name is Required";
   }else{
       $last_Name = $_POST["lname"];
   }
   if(empty($_POST["email"])){
       $email_Error = "Email is Required";
   }else{
       $email = $_POST["email"];
   }
   if(empty($_POST["password"])){
       $password_Error = "Password is Required";
   }else{
       $password = $_POST["password"];
   }
   if(empty($_POST["gender"])){
       $gender_Error = "Gender is Required";
   }else{
       $gender = $_POST["gender"];
   }

}

?>
    


<div class="form_tag">
<h1 id = "head_tag">Form Validation Example</h1>
<form method="post" class = "form_data" autocomplete = "off" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div class="inputbox">
<input type="text" name = "fname">
<span class = "error">* <?php echo $firstName_Error; ?></span>
</div>
<br><br>
<div class="inputbox">
<input type="text" name = "lname">
<span class = "error">* <?php echo $lastName_Error; ?></span>
</div>
<br><br>
<div class="inputbox">
<input type="email" name = "email">
<span class = "error">* <?php echo $email_Error; ?></span>
</div>
<br><br>
<div class="inputbox">
<input type="password" name = "password">
<span class = "error">* <?php echo $password_Error; ?></span>
</div>
<br><br>
<div class="inputbox">
<input type="radio" name = "gender" value = "Male">Male
<input type="radio" name = "gender" value = "Female">Female
<input type="radio" name = "gender" value = "Other">Other
<span class = "error">* <?php echo $gender_Error; ?></span>
</div>
<br><br>
<div class="inputbox">
<input type="submit" name = "submit" value = "Submit">
</div>
</form>
</div>

<?php
echo "<h2>Your Input</h2>";

// echo "" . $first_Name;
// echo "<br>";
// echo "Your L" . $last_Name;
echo "Welcome Back :" . " " . "<b>" . $first_Name . " " . $last_Name . "</b>";
echo "<br>";
echo "Your Email Address Is :" . "<b>$email</b>";
echo "<br>";
echo "Your Password Is :" . "<b>$password</b>";
echo "<br>";
echo "Your Gender Is :" . "<b>$gender</b>";

?>


</body>
</html>
