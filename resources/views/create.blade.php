<!DOCTYPE html>
<html>
<head>
 <title></title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/.../css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/.../jquery/3.3.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/.../1.12.9/umd/popper.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/.../js/bootstrap.min.js"></script>
</head>
<body>
<br>
<h1 class="text-center text-success"> COMPLETE <span class="text-danger">JQUERY</span> FORM VALIDATION 2018 </h1>
<h1 class="text-center"> using <span class="text-warning">keyup()</span> Method </h1>
 <div class="container">
 <div class="col-lg-8 m-auto d-block">
 <form>
 <div class="form-group">
 <label for="user"> Username: </label>
 <input type="text" name="username" id="usernames" class="form-control" autocomplete="off">
 <h5 id="usercheck">  </h5> 
 </div>
 <div class="form-group">
 <label for="password"> Password: </label>
 <input type="text" name="pass" id="password" class="form-control" autocomplete="off">
 <h5 id="passcheck">  </h5> 
 </div>
 <div class="form-group">
 <label for="conpassword"> Con. Password: </label>
 <input type="text" name="username" id="conpassword" class="form-control" autocomplete="off">
 <h5 id="conpasscheck">  </h5> 
 </div>
 <input type="submit" name="" id="submitbtn" value="Submit" class="btn btn-primary">
 </form><br>
 </div>
 </div>
 <script type="text/javascript">
 $(document).ready(function(){
 $('#usercheck').hide();
 $('#passcheck').hide();
 $('#conpasscheck').hide();
 var user_err = true;
 var pass_err = true;
 var conpass_err = true;
 $('#usernames').change(function(){
 username_check();
 });
 function username_check(){
 var user_val = $('#usernames').val();
 if(user_val.length == ''){
 $('#usercheck').show();
 $('#usercheck').html("**Please Fill the username");
 $('#usercheck').focus();
 $('#usercheck').css("color","red");
 user_err = false;
 return false;
 }else{
 $('#usercheck').hide();
 }
 if((user_val.length < 3 ) || (user_val.length > 10 ) ){
 $('#usercheck').show();
 $('#usercheck').html("**Username length must be between 3 and 10");
 $('#usercheck').focus();
 $('#usercheck').css("color","red");
 user_err = false;
 return false;
 }else{
 $('#usercheck').hide();
 }
 }
 $('#password').keyup(function(){
 password_check();
 });
 function password_check(){
 var passwrdstr = $('#password').val();
 if(passwrdstr.length == ''){
 $('#passcheck').show();
 $('#passcheck').html("**Please Fill the password");
 $('#passcheck').focus();
 $('#passcheck').css("color","red");
 pass_err = false;
 return false;
 }else{
 $('#passcheck').hide();
 } 
 if((passwrdstr.length < 3 ) || (passwrdstr.length > 10 ) ){
 $('#passcheck').show();
 $('#passcheck').html("**password length must be between 3 and 10");
 $('#passcheck').focus();
 $('#passcheck').css("color","red");
 pass_err = false;
 return false;
 }else{
 $('#passcheck').hide();
 }
 }
 $('#conpassword').keyup(function(){
 con_passwrd();
 });
 function con_passwrd(){
 var conpass = $('#conpassword').val();
 var passwrdstr = $('#password').val();
 if(passwrdstr != conpass){
 $('#conpasscheck').show();
 $('#conpasscheck').html("** Password are not Matching");
 $('#conpasscheck').focus();
 $('#conpasscheck').css("color","red");
 conpass_err = false;
 return false;
 }else{
 $('#conpasscheck').hide();
 } 
 }
 $('#submitbtn').click(function(){
  user_err = true;
  pass_err = true;
  conpass_err = true;
  username_check();
  password_check();
  con_passwrd();
  if((user_err == true ) && (pass_err == true) && (conpass_err == true)  ){
   return true;
  }else{
   return false;
  }
 });
 });
 </script>
</body>
</html>