<?php
include_once "includes/register-handler.php";

class Account {
	public $errorMsg;
	private $con;
	private $id;
	private $username;
	private $email;
	private $password;
	private $signDate;
	private $picture;

	public function __construct($con) {
		$this->con = $con;

	}

	public function register($username, $p1, $p2, $e) {
		$this->validateUN($username);
		if ($this->validateUN($username)) {
			//$this->insertUser($username, $p1, $e);
			$this->insertUserOOP($username, $p1, $e);
			header("Location:./register.php");
		}
	}

	private function validateUN($un) {
		return true;
	}

	public function insertUserOOP($u, $p1, $e) {

		$this->password = md5($p1);
		$this->username = $u;
		$this->email = $e;
		$this->picture = "includes/assets/images/1.jpg";
		$this->signDate = date("Y-m-d");

		mysqli_query($this->con, "INSERT INTO users VALUES ('','$this->username','$this->email','$this->password','$this->signDate','$this->picture')");

	}

	public function login($u, $p) {

		$password = md5($p);

		$sql = mysqli_query($this->con, "SELECT * FROM users WHERE username='$u' and password='$password'");
		if (mysqli_num_rows($sql) == 1) {
			$_SESSION['username'] = $u;
			header("Location: ./index.php");
		} else {

			$this->errorMsg = "Username and Password was incorrect";
			return false;
		}
	}

	public function insertUser($u, $p1, $e) {

		$encryptedPw = md5($p1);

		$profilePic = "includes/assets/images/1.jpg";
		$date = date("Y-m-d");

		mysqli_query($this->con, "insert into users values ('','$u','$e','$encryptedPw','$date','$profilePic')");
	}


}