<?php
require_once('./config.php');
require_once('./model/create_model.php');
require_once('./model/read_model.php');


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["create_user"])) {
    
    $create_user = createUser();
    
    }
    $getUsers = getUsers();
    
    require_once('./view/create_user.phtml');
?>