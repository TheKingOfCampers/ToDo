<?php 
require('./config.php');
require('./model/update_model.php');

if(isset($_GET['id'])){

    $user_id = $_GET['id'];
    $update_user = updateUser($user_id);
   
    
} else {
    echo 'id needed';
    exit;
}



?>