<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

// define variables and set to empty values

$nameErr = $emailErr = $genderErr = $websiteErr = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($name)) {
    echo "Name is required";
  } else {
    $name;
  }
  
  if (empty($email)) {
    $emailErr = "Email is required";
  } else {
    $email;
  }
    
  if (empty($website)) {
    $website = "";
  } else {
    $website;
  }

  if (empty($comment)) {
    $comment = "";
  } else {
    $comment;
  }

  if (empty($gender)) {
    $genderErr = "Gender is required";
  } else {
    $gender;
  }
}


?>


<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="verynew.php">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Website: <input type="text" name="website">
  <span class="error"><?php echo $websiteErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>


</body>
</html>
