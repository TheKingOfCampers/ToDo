<?php
require('./config.php');
require('./model/create_model.php');
require('./model/read_model.php');


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["create_user"])) {
    
    $create_user = createUser();
    
    }
    
    $getUsers = getUsers();
    require_once'./view/create_user.phtml';
?>