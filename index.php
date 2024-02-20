<?php
// index.php

include('db_config.php');

$sql = "SELECT * FROM todos";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo App</title>
</head>
<body>

<h2>Add New Task</h2>
<form action="todo.php" method="post">
    <label for="task">Task:</label>
    <input type="text" id="task" name="task" required>
    <button type="submit">Add Task</button>
</form>

<?php include('todo_list.php'); ?>

</body>
</html>
