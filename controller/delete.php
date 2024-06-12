<?php 

require('./config.php');
require('./model/delete_model.php');

if(isset($_GET['id'])){

    $task_id = $_GET['id'];
    $delete_task = deleteTask($task_id);
} else {
    echo 'id est nécessaire';
    exit;
}


if(isset($_GET['id'])){

    $user_id = $_GET['id'];
    $delete_user = deleteUser($user_id);
} else {
    echo 'id est nécessaire';
    exit;
}


?>