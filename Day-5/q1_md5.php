<html>
	<form action="q1_md5.php" method="POST">
		<h4>Sign in<br>
  		Enter userid : <input type="text" name="userid"><br>
  		Enter password : <input type="password" name="password"><br><br>
  		<input type="submit" value="submit">
    </h4>
	</form>
</html>
<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "data1";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}


$sql = "CREATE DATABASE data1";
mysqli_query($conn, $sql);

mysqli_close($conn);


$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "CREATE TABLE users (
	id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	userid VARCHAR(50) NOT NULL,
	password VARCHAR(100) NOT NULL
)";

mysqli_query($conn, $sql);

mysqli_close($conn);



@$userid = $_POST["userid"];
@$userpassword = $_POST["password"];
@$passwordenc = md5($userpassword);



$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "INSERT INTO users (userid,password)
VALUES ('$userid','$passwordenc')";
mysqli_query($conn, $sql);

mysqli_close($conn);

if($userpassword){
	echo "<br><br>User Registered";
}
$userpassword=0;
?>
