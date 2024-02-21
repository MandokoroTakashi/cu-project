<?php
// db_config.php

$servername = "mysql:host=localhost;dbname=todo_app";
$username = "root";
$password = "root";

$db = new PDO($servername, $username, $password);
?>
