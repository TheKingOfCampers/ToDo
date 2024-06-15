<?php 
require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../model/read_model.php');
require_once(__DIR__.'/../model/update_model.php');



if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['update_user'])){
    
    
  

    if(isset($_POST['id'], $_POST['first_name'], $_POST['last_name'], $_POST['role'])){
      
        $user_id = $_POST['id'];
        $first_name = htmlspecialchars($_POST['first_name'], ENT_QUOTES);;
        $last_name = htmlspecialchars($_POST['last_name'], ENT_QUOTES);
        $role = htmlspecialchars($_POST['role'], ENT_QUOTES);

        $getUser = getUserById($user_id);

        $updateUser = updateUser($user_id, $first_name, $last_name, $role);
        
    }
    
} else {
    echo 'id est nécessaire';
    exit;
}



require(__DIR__.'/../view/update_user.phtml');

?>