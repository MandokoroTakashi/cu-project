<?php
// todo_list.php

include('db_config.php');

$sql = "SELECT * FROM todos";
$stmt = $db->prepare($sql);
$res = $stmt->execute();

if($res){
    $results = $stmt->fetchAll();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ToDo List</title>
</head>
<body>

<h2>ToDo List</h2>

<ul>
<?php foreach ($results as $result): ?>
        <li class="<?php echo $result['completed'] ? 'completed' : ''; ?>">
            <div class="part">
                <input type="checkbox" <?php echo $result['completed'] ? 'checked' : ''; ?> disabled>
                <p>
                    <?php echo $result['task']; ?>
                </p>
            </div>
            <p>
                <a href="#" class="edit-btn">[edit]</a>
                <a href="delete.php?id=<?php echo $result['id']; ?>" class="delete-btn">[delete]</a>
            </p>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
