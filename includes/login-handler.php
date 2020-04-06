<?php

include "autoloader.php";
include "config.php";
$account = new Account($con);
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $username = str_replace(" ","",$username);

    $password = $_POST['password'];

    $account->login($username,$password);


}