<?php
require('./config.php');
require('./model/create_model.php');
require('./view/create_user.phtml');


if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST["create_user"])) {
    
    $create_user = createUser();

}


?>