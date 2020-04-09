<?php
ob_start();
session_start();
$timezone = date_default_timezone_set("Asia/Colombo");
$con = mysqli_connect("localhost", "dulshaniko", "zaqwsx", "spotify");

if (mysqli_error($con)) {
	echo "failed to connect " . mysqli_connect_errno();
}
