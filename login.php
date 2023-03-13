<?php
session_start();
require_once 'authFunc.php';

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$data = getData();
$error = false;


if (isset($_POST['login'])) {
    if ($password && $email) {


        foreach ($data as $user) {
            if ($user[2] == $email && $user[1] == $password) {
                setcookie('username', $user[0], time() + 500);
                $_SESSION['login'] = true;
                header("location:./dashboard.php");
            } else {
                $error = 1;
            }
        }
    } else {
        $error = 1;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>
    <section class="navbar">
        <?php
        include_once './partials/nav.php';
        ?>
    </section>
    <section class="login-sec">
        <div class="login-form">
            <div class='login-heading'>
                <h2>Log In</h2>
                <p>Provide your details to log in to your account</p>
            </div>
            <div class="main-form">
                <?php if ($error == 1) : ?>
                    <small class="warn"><span class="warn-sign"><svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="m12.002 21.534c5.518 0 9.998-4.48 9.998-9.998s-4.48-9.997-9.998-9.997c-5.517 0-9.997 4.479-9.997 9.997s4.48 9.998 9.997 9.998zm0-8c-.414 0-.75-.336-.75-.75v-5.5c0-.414.336-.75.75-.75s.75.336.75.75v5.5c0 .414-.336.75-.75.75zm-.002 3c-.552 0-1-.448-1-1s.448-1 1-1 1 .448 1 1-.448 1-1 1z" fill-rule="nonzero" />
                            </svg></span> Email or password is incorrect</small>
                <?php endif ?>
                <form action="" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <button type="submit" name="login">Log In</button>
                </form>
            </div>
        </div>
    </section>
</body>

</html>