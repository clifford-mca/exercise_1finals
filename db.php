<?php
$host = "localhost";
$user = "root"; // Default MySQL username
$pass = ""; // Default MySQL password
$dbname = "user_db";

// Connect to MySQL
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
