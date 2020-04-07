<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Classroom</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<?php
	/**
	 * Created by PhpStorm.
	 * User: desmond
	 * Date: 2018-05-09
	 * Time: 2:34 PM
	 */
	header("Content-Type: text/html; charset=utf-8");
	$username = $_COOKIE["username"];
	if (isset($username)){
		header('Location:center.php');

	}
?>
<div align="center">
    <form method="post" action="login.php">
        <h3>Welcome to the upload center</h3>
        <label>Username:</label><input name="username">
        <br/>
        <label>Password:</label><input name="password" type="password">
        <br/><br/>
        <button class="btn-primary btn">Login</button>
        <button class="btn-primary btn" onclick="form.action='register.php'">Register</button>
    </form>
</div>
