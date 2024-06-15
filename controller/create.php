<?php
require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../model/create_model.php');
require_once(__DIR__.'/../model/read_model.php');
require_once(__DIR__.'/../model/delete_model.php');


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["create_user"])) {
    
    $create_user = createUser();
    
    }
    $getUsers = getUsers();
   
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_user'])) {
       
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $user_id = $_POST['id'];
            $delete_user = deleteUser($user_id);
            header("Location: " . $_SERVER['PHP_SELF']);   
        }
    }
    if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($_POST['update_user'])){
        
        if(isset($_POST['id']) && !empty($_POST['id'])){
           
            $user_id = $_POST['id'];
          
        }
    }
    
    require_once(__DIR__.'/../view/create_user.phtml');
?>