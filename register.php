<?php
include_once "includes/autoloader.php";

include_once "includes/register-handler.php";
include_once "includes/login-handler.php";


?>
<style>
    .error {
        color: green;
    }
</style>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./includes/assets/css/style.css?v=<?php echo time() ?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2&family=Gotu&family=Open+Sans:wght@300&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comic+Neue&display=swap" rel="stylesheet">
    <title>Spotify</title>
</head>
<body>
<div class="inputContainer">
    <div class="forms">

        <div class="login">

            <form action="register.php" method="post" id="loginForm">
                <h2>Login to Your N!k0 Account</h2>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="nimmi" required class="inputReg"><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="password" class="inputReg"
                       required><br>
                <input type="submit" value="Login" id="login" name="login">
                <p><span id="hideLogin">Don't have an account yet? Signup here.</span></p>
                <h3><?php echo $account->errorMsg ?></h3>
            </form>
        </div>
        <div class="register">
            <form action="register.php" method="post" id="registerForm">
                <h2 id="h2">Create Your Account</h2>
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="usernameR" placeholder="nimmi" class="inputReg" required><br>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="emailR" placeholder="nimmi@gmail.com" class="inputReg"
                       required><br>
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="passwordR" class="inputReg" required placeholder="password"
                       onkeyup="passwordCheck()"><br><br>
                <label for="password">Confirm Password:</label><br>
                <input type="password" name="confirmPassword" id="passwordConfirm" class="inputReg" required
                       onkeyup="passwordCheck()"
                       onblur="passwordConfirmCheck()"><br><br>
                <input type="submit" value="Register" name="register" id="submitR">
            </form>
        </div>
    </div>
    <div class="wording">
        <h1>Get great music right now</h1>
        <h4>Listen to loads of songs for free</h4>
        <ul>
            <li>Discover music you'll fall in love with</li>
            <li>Create your own playlists</li>
            <li>Follow artists to keep up to date</li>
        </ul>
    </div>


</div>
<script src="includes/assets/js/form_validation.js?v=<?php echo time(); ?>"></script>

</body>
</html>