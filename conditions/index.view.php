<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title›Document</title›
</head>

<body>
<ul>
    <li><strong>Name: </strong><?=$task['title'];?></li>

    <li><strong>Due Date: </strong><?= $task['due']; ?></li>

    <li><strong>Personal Responsible: </strong><?= $task['assigned to']; ?></li>

    <li>
        <strong>Status: </strong>
        
        <?php /* <strong>Status: </strong><?= $task['complete'] ? 'completed' : 'incompleted'; */?>
         
        <?php
        if ($task['complete']){
            echo 'complete';
        }else {
            echo 'incomplete';
        }
        ?>




    </li>


</ul></body>
</html>
