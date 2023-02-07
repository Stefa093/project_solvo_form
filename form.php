<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $create_password = $_POST["create_password"];
    $confirm_password = $_POST["confirm_password"];

    $mensaje = "Hello $first_name $last_name! \r\n";
    $mensaje .= "Congratulations for being part of this application that is your #1 training to get started in the world of programming. 
    Next we are going to display some variables that you should get from the previous view: \r\n";
    $mensaje .= "Your email is: $email \r\n";
    $mensaje .= "Your phone is: $phone \r\n";

    echo $mensaje;

    ?>
    <script>
        setTimeout(function() {
            window.location.replace("index.html")
        },10000)
    </script>
</body>

</html>




