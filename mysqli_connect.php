<?php
$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$dbname = "blog";

// Create connection
$conn = mysqli_connect($db_servername,$db_username,$db_password,$dbname);

// Check connection
if (!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}


?>