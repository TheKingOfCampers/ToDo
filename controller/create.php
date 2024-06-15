<?php
require_once('./config.php');
require_once('./model/create_model.php');
require_once('./model/read_model.php');
require_once('./model/delete_model.php');


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["create_user"])) {
    
    $create_user = createUser();
    
    }
    $getUsers = getUsers();
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $user_id = $_POST['id'];
            $delete_user = deleteUser($user_id);
            header("Location: " . $_SERVER['PHP_SELF']);   
        }
    }
    
    require_once('./view/create_user.phtml');
?>