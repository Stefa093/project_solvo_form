<?php
    session_start();
    
    $text_confirmation = "";
    $name_confirmation = "";
    $number_confirmation = "";
    $last_confirmation = "";

    if (isset ($_POST["submit"])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $create_password = $_POST["create_password"];
        $confirm_password = $_POST["confirm_password"];

        if ($create_password === $confirm_password) {
            $text_confirmation = "Las contraseñas son iguales";
            $_SESSION['form'] = $_POST;
            header('Location: form.php');
        } else {
            $text_confirmation = "Las contraseñas no son iguales";
        };

        if (ctype_alpha($first_name)) {
            $name_confirmation = "El nombre es correcto";
            $_SESSION['form'] = $_POST;
            header('Location: form.php');
        } else {    
            $name_confirmation = "El nombre no es correcto";
        };

        if (ctype_alpha($last_name)) {
            $last_confirmation = "El apellido es correcto";
            $_SESSION['form'] = $_POST;
            header('Location: form.php');
        } else {    
            $last_confirmation = "El apellido no es correcto";
        };

        if (is_numeric($phone)) {
            $number_confirmation = "Telefono es correcto";
            $_SESSION['form'] = $_POST;
            header('Location: form.php');
        } else {
            $number_confirmation = "Telefono no es correcto";
        };

        // if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //     $email_confirmation = "Formato invalido"
        // };
    };    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Form</title>
</head>
<body class="p-3 d-flex flex-row mb-3 justify-content-center align-items-center vw-100 vh-100 container gap-3">
    <section class="d-flex flex-column justify-content-center align-items-center w-50">
        <img src="./images/Image 1.png" alt="logo">
        <h1 class="fw-bold fs text-left text-dark">Let's Make it Happen!</h1>
    </section>
    <section class="card card-body shadow-lg p-3 mb-5 bg-body rounded w-50 p-3 d-flex">
        <p class="card-subtitle mb-2 text-muted fw-bold text-black-50 text-end">Already have an account? <u>Sign in here</u></p>
        <h3 class="fw-bold">Create An Account</h3>
        <form action="index.php" method="post" >
            <div class="row row-cols-2 mt-3">
                <div class="form_info">
                    <label for="first_name" class="form-label">First Name</label>
                    <input id="first_name" name="first_name" type="text" class="form-control" required>
                    <small>
                    <?=$name_confirmation?>
                    </small>
                </div>
                <div class="form_info">
                    <label for="last_name" class="form-label">Last Name</label>
                    <input id="last_name" name="last_name" type="text" class="form-control" required>
                    <small>
                    <?=$last_confirmation?>
                    </small>
                </div>
                <div class="form_info">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" name="email" type="email" class="form-control" required>
                </div>
                <div class="form_info">
                    <label for="phone" class="form-label">Phone</label>
                    <input id="phone" name="phone" type="text" class="form-control" required>
                    <small>
                    <?=$number_confirmation?>
                    </small>
                </div>
                <div class="form_info">
                    <label for="create_password" class="form-label">Create Password</label>
                    <input id="create_password" name="create_password" type="password" class="form-control" required>
                </div>
                <div class="form_info">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input id="confirm_password" name="confirm_password" type="password" class="form-control" required>
                </div>
            </div>
            <div>
                <small>
                    <?=$text_confirmation?>
                </small>
            </div>
            <div class="mt-4">
                <div class="">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" required>
                    <label class="" for="flexCheckChecked">Creating your account and you accepting <b>Terms & Conditions</b></label>
                </div>
                <div>
                    <input type="submit" value="Create Account" name="submit" class="btn btn-dark btn mt-5">
                </div>
            </div>
        </form>
    </section>
    
</body>
</html>