<?php
// update_completed.php

include('db_config.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $taskId = $_GET['id'];
    $completed = $_POST['completed'];


    $sql = "UPDATE todos SET completed = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $completed, PDO::PARAM_INT);
    $stmt->bindParam(2, $taskId, PDO::PARAM_INT);
    $stmt->execute();
}

header("Location: index.php");
?>
