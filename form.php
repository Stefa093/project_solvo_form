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
<body class="p-3 d-flex justify-content-center align-items-center vw-100 vh-100">
    <?php
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $create_password = $_POST["create_password"];
    $confirm_password = $_POST["confirm_password"];
    ?>
<main class = "card card-bod shadow-lg p-3 mb-5 bg-body rounded w-75 p-3 h-50 d-inline-block row">
    <h1 class="card-title fs-1 fw-bold">Hello <span class = "text-danger"><?=$first_name;?></span> <span class = "text-danger"><?=$last_name;?></span>!</h1>
    <p class="card-text fs-6"> Congratulations for being part of this application that is your #1 training to get started in the world of programming. 
    Next we are going to display some variables that you should get from the previous view:</p>
    <p class="card-text fs-6">Your email is: <b class = "text-danger"><?= $email; ?></b></p>
    <p class="card-text fs-6">Your phone is:  <b class = "text-danger"><?= $phone; ?></b></p>
</main>
<script>
    
    // setTimeout(function() {
    //     window.location.replace("index.html")
    // },20000)
</script>
</body>
</html>




