<?php
session_start();

$host = "localhost";
$port = 3307; // <-- add this line
$user = "root";
$pass = "MyNewRootPass123"; // <-- your new root password
$db   = "blog";

$conn = new mysqli($host, $user, $pass, $db, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>