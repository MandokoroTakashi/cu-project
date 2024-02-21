<?php
// edit.php

include('db_config.php');

if (isset($_POST['id'])) {
    $taskId = $_POST['id'];
    $task = $_POST['task'];

    $sql = "UPDATE todos SET task = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $task, PDO::PARAM_STR);
    $stmt->bindParam(2, $taskId, PDO::PARAM_INT);
    $stmt->execute();
}

header("Location: index.php");
?>