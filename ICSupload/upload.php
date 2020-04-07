<?php
	/**
	 * Created by PhpStorm.
	 * User: desmond
	 * Date: 2018-05-09
	 * Time: 7:48 PM
	 */
	header("Content-Type: text/html; charset=utf-8");
	$username = $_COOKIE['username'];
	$target_dir = "files/$username/";
	$filename = $_FILES["fileToUpload"]["name"];
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		echo "<script>alert('The file has been successfully uploaded')</script>";

	} else {
		echo "<script>alert('Sorry, there was an error uploading your file.')</script>";
		$url = "center.php";
		echo "<script type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";
		exit;
	}
	require_once "function.php";
	$conn = connectDB();
	$sql = "INSERT INTO fileinfo(username,filename,time) VALUES ('$username','$filename',now())";
	mysqli_query($conn,$sql);
	$url = "center.php";
	echo "<script type='text/javascript'>";
	echo "window.location.href='$url'";
	echo "</script>";
	exit;