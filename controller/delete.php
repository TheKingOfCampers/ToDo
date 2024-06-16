<?php 

require(__DIR__.'/../config.php');
require(__DIR__.'/../model/delete_model.php');

if(isset($_GET['id'])){

    $task_id = $_GET['id'];
    $delete_task = deleteTask($task_id);
} else {
    echo 'id est nécessaire';
    exit;
}


if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['delete_user'])){

    $user_id = $_GET['id'];
    $delete_user = deleteUser($user_id);
    
} else {
    echo 'id est nécessaire';
    exit;
}

require(__DIR__.'/view/read_users.phtml');
?>