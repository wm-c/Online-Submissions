<?php
	/**
	 * Created by PhpStorm.
	 * User: desmond
	 * Date: 2018-05-09
	 * Time: 3:21 PM
	 */
	header("Content-Type: text/html; charset=utf-8");
	require_once "function.php";
	$username = $_POST["username"];
	$password = $_POST["password"];
	$conn = connectDB();
	$sql = "SELECT username FROM users WHERE username='$username'";
	$result = mysqli_query($conn,$sql);
	if (sizeof(mysqli_fetch_assoc($result))==1){
		echo "<script>alert('Username already exist')</script>";
		$url = "index.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
		exit;
	}

	$sql = "INSERT INTO users(username,password) VALUES('$username','$password')";
	mysqli_query($conn,$sql);
	mkdir("files/$username");
	setcookie('username',$username);
	setcookie('password',$password);
	?>

	<script>
		alert("Registration Success! \n Username:<?php print $username?> \n")
		window.location.href = 'center.php'
	</script>


