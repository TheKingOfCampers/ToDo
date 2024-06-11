<?php 

require('./config.php');
require('./model/update_model.php');

if(isset($_GET['id'])){

    $task_id = $_GET['id'];
    $update_task = updateTask($task_id);
} else {
    echo 'id needed';
    exit;
}



?>