<?php

//How to set cookies in php, super varible used..$_COOKIES
//first we have to setcookies();

//syntax :- setcookies(cookies_name,cookies_value,expire_time,path)


//example of create cookies
//first we have to define cookies name and cookies value.

$cookies_name = "usercookies";
$cookies_value = "This site is used Cookies";

setcookie($cookies_name,$cookies_value,time() + (60 * 60),"/");


echo $_COOKIE[$cookies_name];

echo "<br>";






?>

<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookies_name])){
          echo "cookie is not set";
        }else{
            $_COOKIE[$cookies_name]; 
        }

        ?>
    </body>
</html>