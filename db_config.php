<?php
// db_config.php

$servername = "localhost";
$username = "root";
$password = "root";
$database = "todo_app";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
