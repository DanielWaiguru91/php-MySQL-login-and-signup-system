<?php
$db_hostname = "localhost";
$db_username = "root";
$db_pass = "";
$db_name = "phploginandsignup";

$conn = mysqli_connect($db_hostname, $db_username, $db_pass, $db_name);
if (!$conn) {
	die("Unable to connect to the database").mysqli_error();

}
else{
	echo "You are connected";
}
