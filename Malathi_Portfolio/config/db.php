<?php
// Database connection file
$host = "localhost";
$dbname = "malathi_portfolio";
$username = "root";
$password = ""; // XAMPP default is empty. Change if your MySQL password is different.

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>
