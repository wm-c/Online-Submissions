<?php
	/**
	 * Created by PhpStorm.
	 * User: desmond
	 * Date: 2018-05-09
	 * Time: 8:19 PM
	 */
	header("Content-Type: text/html; charset=utf-8");
	setcookie('username', null, -1);
	header('Location:index.php');
