<?php
	/**
	 * Created by PhpStorm.
	 * User: desmond
	 * Date: 2018-05-09
	 * Time: 2:39 PM
	 */
	header("Content-Type: text/html; charset=utf-8");
	$username = $_COOKIE["username"];
	$password = $_COOKIE["password"];
    require_once "function.php";
    $conn = connectDB();
    $sql = "select password from users where username = '$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) ==0){
        setcookie('username', null, -1);
        echo "<script>alert('User does not exist')</script>";
        $url = "index.php";
        echo "<script type='text/javascript'>";
        echo "window.location.href='$url'";
        echo "</script>";
        exit;
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Classroom</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<h3 align="center">Hello! <?php print $username?> <button class="btn btn-sm btn-warning" onclick="location.href='logout.php'">Logout</button></h3>
<div align="center">
    <form action="upload.php" method="post" enctype="multipart/form-data" style="border: 2px solid; width: 300px;">
        <br/>
        <input type="file"  name="fileToUpload" id="fileToUpload">
        <br/><input type="submit" value="Upload chosen file" name="submit">
        <br/><br/>
    </form>
</div>
<div align="center" style="padding: 5%">
    <table class="table table-bordered">
        <caption>Uploaded Files</caption>
        <thead>
        <tr>
            <th>FileName</th>
            <th>Date</th>
            <th>Download</th>
            <th>Delete</th>
            <th>Comment</th>
        </tr>   
        <?php

            $sql = "SELECT filename,time,comment from fileinfo WHERE username = '$username'";
            $result = mysqli_query($conn,$sql);
	        $response = mysqli_fetch_all($result);
//	        print_r($response);
	        foreach ($response as $item){
	            $filename = $item[0];
	            $time = $item[1];
	            $comment = $item[2];
	            echo "<tr>";
	            echo "<td>$filename</td>";
	            echo "<td>$time</td>";
                echo "<td><form method='post' action='download.php'><input name='filename' value='$filename' hidden><button>Download</button></form></td>";
		        echo "<td><form method='post' action='delete.php'><input name='filename' value='$filename' style='outline: none;' hidden><button>Delete</button></form></td>";
		        echo "<td>$comment</td>";
		        echo "</tr>";
            }

        ?>
        </tbody>
    </table>
</div>
<script>
$('#fileToUpload').inputFileText({
    text: 'Select File to upload'
});
</script>
</body>
</html>
