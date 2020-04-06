 <?php
 include_once "includes/autoloader.php";

include_once "includes/register-handler.php";
include_once "includes/login-handler.php";



 ?>
 <style>
     .error{
         background: red;
     }
     .success{
         background: lightgreen;
     }
 </style>

  <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotify</title>
</head>
<body>
<div class="inputContainer">
<form action="register.php" method="post" id="loginForm">
    <h2>Login to your account</h2>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login" id="login" name="login">
</form>

    <h3>Create your free account</h3>
    <form action="register.php" method="post" id="registerForm">
        <h2>Create Your Account</h2>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="usernameR" required ><br>
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="emailR" required ><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="passwordR" required onkeyup="passwordCheck()" ><br><br>
        <label for="password">Confirm Password:</label><br>
        <input type="password" name="confirmPassword" id="passwordConfirm" required onkeyup="passwordCheck()" onblur="passwordConfirmCheck()"><br><br>
        <input type="submit" value="Register" name="register" id="submitR" >
    </form>


</div>

<script src="js/form_validation.js?v=<?php echo time(); ?>"></script>
</body>
</html>