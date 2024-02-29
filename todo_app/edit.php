<?php
// edit.php

include('db_config.php');

if (isset($_GET['id'])) {
  $taskId = $_GET['id'];

  $sql = "SELECT * FROM todos where id = ?";
  $stmt = $db->prepare($sql);
  $stmt->bindParam(1, $taskId, PDO::PARAM_INT);
  $res = $stmt->execute();
  if($res){
      $result = $stmt->fetch();
  }
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ToDo List</title>
</head>
<body>
<div class="container">
    <h2>Edit Task</h2>
    <form action="update.php" method="post">
        <label for="task">Task:</label>
        <input type="text" id="task" name="task" value="<?php echo $result['task']; ?>" required>
        <input type="hidden" id="id" name="id" value="<?php echo $result['id']; ?>">
        <button type="submit">Edit Task</button>
    </form>
</div>

</body>
</html>