<?php
// delete.php

include('db_config.php');

if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    $sql = "DELETE FROM todos WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $taskId, PDO::PARAM_INT);
    $stmt->execute();
}

header("Location: index.php");
?>
