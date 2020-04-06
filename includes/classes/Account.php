<?php
include_once "includes/register-handler.php";

class Account
{
    private $con;

public function __construct($con)
{
$this->con = $con;

}
 public function register($username,$p1,$p2,$e){
    $this->validateUN($username);
      if($this->validateUN($username)){
             $this->insertUser($username,$p1,$e);
             header("Location:./index.html");
     }
 }

 private function validateUN($un){
    return true;
    }

public function login($u,$p){
    $password = md5($p);
    echo $password;
    $sql      = mysqli_query($this->con,"SELECT * FROM users WHERE username='$u' and password='$password'");
    if(mysqli_num_rows($sql) == 1){

        header("Location: ./index.html");
    }
    else{
        echo  "login failed";
        return false;
    }
}
public function insertUser($u,$p1,$e){

    $encryptedPw = md5($p1);

    $profilePic = "includes/assets/images/1.jpg";
    $date = date("Y-m-d");

      mysqli_query($this->con,"insert into users values ('','$u','$e','$encryptedPw','$date','$profilePic')");

}

}