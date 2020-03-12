<?php
require_once("connection.php");
$username = $_POST["user"];
$password = $_POST["pass"];

$sql = "SELECT * FROM members WHERE username='$username' AND password='$password'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "Loggedin successfully";
	header('Refresh: 2; URL = home.php');

}
else{
	echo "Wrong Username/Password";
}


?>