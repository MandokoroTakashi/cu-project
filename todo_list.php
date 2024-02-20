<?php
// todo_list.php

include('db_config.php');

$sql = "SELECT * FROM todos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
</head>
<body>

<h2>ToDo List</h2>

<ul>
    <?php while ($row = $result->fetch_assoc()): ?>
        <li><?php echo $row['task']; ?></li>
    <?php endwhile; ?>
</ul>

</body>
</html>
