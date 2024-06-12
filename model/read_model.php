<?php 
function getUsers(){

    $database = connect_db();

    $sql="SELECT * FROM user;";

    $query = $database->prepare($sql);
    $query->execute();
    
    return $query->fetchAll(PDO::FETCH_ASSOC);

    


}



?>