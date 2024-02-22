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
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>ToDo List</title>
</head>
<body>
    
    <h2>ToDo List</h2>
    
    <ul>
        <?php if(empty($results)): ?>
            <li>Let's make new Task!</li>
        <?php else: ?>
            <?php foreach ($results as $result): ?>
                <li data-task-id="<?php echo $result['id']; ?>" class="<?php echo $result['completed'] ? 'completed' : ''; ?>">
                    <div class="part">
                        <input type="checkbox" <?php echo $result['completed'] ? 'checked' : ''; ?> onchange="updateCompleted(<?php echo $result['id']; ?>)">
                        <p class="class_p">
                            <?php echo $result['task']; ?>
                        </p>
                    </div>
                    <p>
                        <a href="edit.php?id=<?php echo $result['id']; ?>" class="edit-btn">[edit]</a>
                        <a href="delete.php?id=<?php echo $result['id']; ?>" class="delete-btn">[delete]</a>
                    </p>
                </li>
                <?php endforeach; ?>
        <?php endif; ?>
        </ul>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>

function updateCompleted(taskId) {
    const checkbox = document.querySelector(`li[data-task-id="${taskId}"] input[type="checkbox"]`);
    const ps = document.querySelector(`li[data-task-id="${taskId}"] .class_p`);
    let checkedOrNot = checkbox.checked ? 1 : 0;
    
    $.ajax({
        url: `update_completed.php?id=${taskId}`,
        type: "POST",
        data: {'completed': checkedOrNot}
    }).done(function() {
                if(checkedOrNot){
                    ps.classList.add('checked_p');
                }else{
                    ps.classList.remove('checked_p');
                }
        })
     .fail(function(error) {
         alert('error');
         console.log(error);
       });
    }

</script>
</body>
</html>
