<?php
// todo.php

include('db_config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $task = $_POST['task'];

    $sql = "INSERT INTO todos (task) VALUES ('$task')";
    $result = $conn->query($sql);
}

header("Location: index.php");
?>
