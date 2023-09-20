<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "contact_form"; 

$conn = new mysqli($hostname, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
