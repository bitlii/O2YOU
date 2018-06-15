<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "o2you";

//Create connection to the databse server
$conn = new mysqli($servername, $username, $password, $dbname);
//Check connection to the database server, and if it doesn't connect -> throw error at them.
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
?>