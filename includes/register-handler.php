<?php
include "autoloader.php";
include "includes/config.php";

$account = new Account($con);

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $username = str_replace(" ","",$username);

    $password = $_POST['password'];


    $email = $_POST['email'];
    $email = str_replace(" ","",$email);

    $confirmPassword = $_POST['confirmPassword'];

     $account->register($username,$password,$confirmPassword,$email);
}
?>