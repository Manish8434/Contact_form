<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    
<form action="insertphp.php" method="POST">
    <h1>Form Validatin Example</h1>
    <label for="">Name</label>
    <input type="text" name="username" value="" placeholder="Enter name.."><br>
    <label for="">Email</label>
    <input type="text" name="email" value="" placeholder="Enter email.."><br>
    <label for="">Phone no</label>
    <input type="number" name="phone" value="" placeholder="Enter Phone number.."><br>
    <label for="">Password</label>
    <input type="text" name="userpassword" value="" placeholder="Enter Password.."><br><br>
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>