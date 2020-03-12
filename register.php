<?php
require_once("connection.php");
$username = $_POST["user"];
$email = $_POST["email"];
$pasword = $_POST["pass"];

$sql = "INSERT INTO members(username, email, password) VALUES('".$username."', '".$email."', '".$password."')";

if($conn->query($sql) === true){
	echo "You are connected";
}
else{
	echo "error" .$sql .$conn->error;
}


?>