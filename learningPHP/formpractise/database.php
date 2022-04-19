<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    
<form action="datapractise.php" method="post">
<label for="">Name</label>
<input type="text" name="name" value="" ><br>
<label for="">Email</label>
<input type="text" name="email" value=""><br>
<label for="">password</label>
<input type="password" name="password" value=""><br>
<label for="">gender</label>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<br><br>
<input type="submit" name="submit"  value="submit">
</form>
</body>
</html>