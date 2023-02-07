<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <title>Card</title>
</head>
<body class="text-bg-light p-3">
    <?php
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $create_password = $_POST["create_password"];
    $confirm_password = $_POST["confirm_password"];
    ?>
<main class = "card card-bod">
    <h1 class="card-title"><?php echo "Hello $first_name $last_name! \r\n";?></h1>
    <p class="card-text"><?php echo "Congratulations for being part of this application that is your #1 training to get started in the world of programming. 
    Next we are going to display some variables that you should get from the previous view: \r\n";?> </p>
    <p class="card-text"><?php echo "Your email is: $email \r\n";?></p>
    <p class="card-text"><?php echo "Your phone is: $phone \r\n";?></p>
</main>
    <!-- <script>
        setTimeout(function() {
            window.location.replace("index.html")
        },10000)
    </script> -->
</body>

</html>




