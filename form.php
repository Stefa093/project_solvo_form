<?php

$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$create_password = $_POST["create_password"];
$confirm_password = $_POST["confirm_password"];

$mensaje = "Hello $first_name $last_name! \r\n";
$mensaje = "Congratulations for being part of this application that is your #1 training to get started in the world of programming. 
Next we are going to display some variables that you should get from the previous view: \r\n";
$mensaje = "Your email is: $email \r\n";
$mensaje = "Your phone is: $phone \r\n";

header("Location:card.html")
?>
