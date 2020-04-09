<?php
include_once "includes/classes/Account.php";

if (isset($_SESSION['username'])) {
	$username = $_SESSION['username'];
} else {
	header("Location: register.php ");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Spotify- Home</title>
</head>
<body>
<h1>Spotify- Home</h1>
<h2>Good morning <?php echo $username ?></h2>
</body>
</html>