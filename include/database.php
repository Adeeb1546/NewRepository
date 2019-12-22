<?php
$servername = "localhost";
$username = "adeeb";
$password = "Adeeb@123";
$database = "adeeb_computer";

// Create connection
$conn = new mysqli($servername, $username, $password,$database);
// Check connection
if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);
} 
if(!$conn){
	echo "Database Connection Error";
}
?>