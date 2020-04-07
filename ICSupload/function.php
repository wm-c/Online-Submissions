<?php
	/**
	 * Created by PhpStorm.
	 * User: desmond
	 * Date: 2018-05-09
	 * Time: 2:37 PM
	 */
	header("Content-Type: text/html; charset=utf-8");
	require_once 'config.php';

	function connectDB()
	{
		$conn = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PW, MYSQL_DB);

		if (!$conn) {
			die('Error in connecting to mySQL database');
		}
		mysqli_query($conn, "set names UTF8;");

		return $conn;
	}
