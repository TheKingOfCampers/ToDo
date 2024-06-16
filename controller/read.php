<?php
require_once(__DIR__.'/../config.php');
require_once(__DIR__.'/../model/create_model.php');
require_once(__DIR__.'/../model/read_model.php');


    $getUsers = getUsers();

    require(__DIR__.'/../view/read_users.phtml');
?>
